--
-- Database: `qr_test`
--

CREATE TABLE `tt` (
  `id` int(30) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `tt`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tt`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
