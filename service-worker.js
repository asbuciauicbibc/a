const CACHE_NAME = 'app-cache-v1';
const urlsToCache = [
  '/',
  '/index.php',
  '/style.css',
  '/script.js',
  '/болид 1.jpeg',
  '/результаты1.jpg',
  '/команда.jpg',
];

self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then((cache) => {
        return cache.addAll(urlsToCache);
      })
  );
});

// Получение ресурсов из кэша или с сервера
self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request)
      .then((response) => {
        if (response) {
          return response; // Возвращаем ресурс из кэша, если он есть
        }

        return fetch(event.request); // Запрашиваем ресурс с сервера
      })
  );
});

// Удаление устаревших кэшей при активации новой версии Service Worker
self.addEventListener('activate', (event) => {
  event.waitUntil(
    caches.keys()
      .then((cacheNames) => {
        return Promise.all(
          cacheNames.map((cacheName) => {
            if (cacheName !== CACHE_NAME) {
              return caches.delete(cacheName);
            }
          })
        );
      })
  );
});
