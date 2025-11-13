<?php
// class Cache {
//     private Redis $redis;

//     public function __construct() {
//         $this->redis = new Redis();
//         $this->redis->connect('redis', 6379);
//     }

//     public function set(string $key, mixed $value, int $ttl = 3600): void {
//         $this->redis->set($key, serialize($value), $ttl);
//     }

//     public function get(string $key): mixed {
//         $data = $this->redis->get($key);
//         return $data ? unserialize($data) : null;
//     }

//     public function delete(string $key): void {
//         $this->redis->del($key);
//     }
// }
