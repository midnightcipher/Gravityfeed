1. Open project using wamp / mamp or whatever you perfer.
2. Open class/Database.php and put your database details in there.
3. Open up phpmyadmin or any other MySql database manager and insert the following queries.

```
CREATE TABLE `droplets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `droplet` varchar(140) NOT NULL,
  `timestamp` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

CREATE TABLE `pulled` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user1_id` int(11) DEFAULT NULL,
  `user2_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL DEFAULT '',
  `user_email` varchar(255) NOT NULL DEFAULT '',
  `user_pass` varchar(255) NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_droplets` int(255) DEFAULT NULL,
  `user_pulling` int(255) DEFAULT NULL,
  `user_pulled` int(255) DEFAULT NULL,
  `user_love` int(255) DEFAULT NULL,
  `user_tagline` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_created_at`, `user_droplets`, `user_pulling`, `user_pulled`, `user_love`, `user_tagline`)
VALUES
  (1, 'user', 'user@email.com', '$2y$10$9iTISdbSyiacf2D5QhR9JO8goe1fL4Oynlle/ssRW77.x0N/XRZYy', '2016-09-14 01:47:54', NULL, 32, 52, 20, 'I create awesome websites!');
  ```

  You can now login with the following details below:


  Email: user@email.com
  Password: lol123



