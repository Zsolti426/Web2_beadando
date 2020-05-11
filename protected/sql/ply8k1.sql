

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `permission` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `permission`) VALUES
(1, 'Norbert', 'Szucs', 'mail.norbert.szucs@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1),
(2, 'Elek', 'Teszt', 'Teszt@elek.com', '4b4b04529d87b5c318702bc1d7689f70b15ef4fc', 0);




CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email` varchar(250) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `nationality` varchar(250) NOT NULL DEFAULT 'Undefined'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `workers` (`id`, `first_name`, `last_name`, `email`, `gender`, `nationality`) VALUES
(1, 'Elek', 'Teszt', 'teszt@elek.com', 1, 'Magyar');


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

