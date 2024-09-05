CREATE TABLE `games` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `category_id` int,
  `developer_id` int,
  `title` varchar(255),
  `slug` varchar(255),
  `price` float,
  `description` text,
  `console` varchar(255),
  `created_at` timestamp,
  `updated_at` timestamp,
  `owned` float,
  `image` varchar(255)
);

CREATE TABLE `categories` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(255),
  `slug` varchar(255),
);

CREATE TABLE `developers` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(255),
  `slug` varchar(255)
);

ALTER TABLE `categories` ADD FOREIGN KEY (`id`) REFERENCES `games` (`category_id`);

ALTER TABLE `developers` ADD FOREIGN KEY (`id`) REFERENCES `games` (`developer_id`);
