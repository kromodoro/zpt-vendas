-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 15/01/2023 às 21:08
-- Versão do servidor: 8.0.31
-- Versão do PHP: 8.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `default`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `logs`
--

CREATE TABLE `logs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `description`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Registrou o Produto', 22, '2023-01-14 21:55:29', '2023-01-14 21:55:29'),
(2, 1, 'Registrou o Produto', 23, '2023-01-14 22:27:59', '2023-01-14 22:27:59'),
(3, 1, 'Registrou o Produto', 24, '2023-01-14 22:30:01', '2023-01-14 22:30:01'),
(4, 1, 'Atualizou o Produto', 20, '2023-01-14 22:38:28', '2023-01-14 22:38:28'),
(5, 1, 'Atualizou o Produto', 20, '2023-01-14 22:46:37', '2023-01-14 22:46:37'),
(6, 1, 'Atualizou o Produto', 20, '2023-01-14 22:47:09', '2023-01-14 22:47:09'),
(7, 1, 'Atualizou o Produto', 20, '2023-01-14 22:47:34', '2023-01-14 22:47:34'),
(8, 1, 'Atualizou o Produto', 20, '2023-01-14 22:48:03', '2023-01-14 22:48:03'),
(9, 1, 'Atualizou o Produto', 20, '2023-01-14 22:53:15', '2023-01-14 22:53:15'),
(10, 1, 'Atualizou o Produto', 20, '2023-01-14 22:54:49', '2023-01-14 22:54:49'),
(11, 1, 'Atualizou o Produto', 20, '2023-01-14 22:56:12', '2023-01-14 22:56:12'),
(12, 1, 'Atualizou o Produto', 20, '2023-01-14 23:13:19', '2023-01-14 23:13:19'),
(13, 1, 'Registrou o Produto', 25, '2023-01-14 23:14:58', '2023-01-14 23:14:58'),
(14, 1, 'Registrou o Produto', 26, '2023-01-14 23:24:57', '2023-01-14 23:24:57'),
(15, 1, 'Atualizou o Produto', 26, '2023-01-14 23:28:22', '2023-01-14 23:28:22'),
(16, 1, 'Atualizou o Produto', 26, '2023-01-14 23:29:25', '2023-01-14 23:29:25'),
(17, 1, 'Atualizou o Produto', 26, '2023-01-14 23:30:05', '2023-01-14 23:30:05'),
(18, 1, 'Atualizou o Produto', 20, '2023-01-14 23:31:37', '2023-01-14 23:31:37'),
(19, 1, 'Atualizou o Produto', 20, '2023-01-14 23:32:35', '2023-01-14 23:32:35'),
(20, 1, 'Atualizou o Produto', 20, '2023-01-14 23:33:53', '2023-01-14 23:33:53'),
(21, 1, 'Atualizou o Produto', 11, '2023-01-14 23:50:15', '2023-01-14 23:50:15'),
(22, 1, 'Atualizou o Produto', 11, '2023-01-14 23:50:57', '2023-01-14 23:50:57'),
(23, 1, 'Atualizou o Produto', 11, '2023-01-14 23:51:30', '2023-01-14 23:51:30'),
(24, 1, 'Atualizou o Produto', 11, '2023-01-14 23:51:56', '2023-01-14 23:51:56'),
(25, 1, 'Registrou o Produto', 27, '2023-01-14 23:58:24', '2023-01-14 23:58:24'),
(26, 1, 'Registrou o Produto', 28, '2023-01-15 00:30:43', '2023-01-15 00:30:43'),
(27, 1, 'Atualizou o Produto', 11, '2023-01-15 10:49:06', '2023-01-15 10:49:06'),
(28, 1, 'Atualizou o Produto', 11, '2023-01-15 10:49:17', '2023-01-15 10:49:17'),
(29, 1, 'Atualizou o Produto', 11, '2023-01-15 10:50:03', '2023-01-15 10:50:03'),
(30, 1, 'Atualizou o Produto', 11, '2023-01-15 10:51:10', '2023-01-15 10:51:10'),
(31, 1, 'Atualizou o Produto', 11, '2023-01-15 10:51:53', '2023-01-15 10:51:53'),
(32, 1, 'Atualizou o Produto', 28, '2023-01-15 11:02:30', '2023-01-15 11:02:30'),
(33, 1, 'Registrou o Produto', 29, '2023-01-15 11:03:58', '2023-01-15 11:03:58'),
(34, 1, 'Vendeu o Produto', 1, '2023-01-15 15:10:41', '2023-01-15 15:10:41'),
(35, 1, 'Vendeu o Produto', 10, '2023-01-15 15:11:31', '2023-01-15 15:11:31'),
(36, 1, 'Atualizou o Produto', 1, '2023-01-15 15:13:12', '2023-01-15 15:13:12'),
(37, 1, 'Vendeu o Produto', 1, '2023-01-15 15:13:21', '2023-01-15 15:13:21'),
(38, 1, 'Vendeu o Produto', 2, '2023-01-15 15:14:02', '2023-01-15 15:14:02'),
(39, 2, 'Vendeu o Produto', 6, '2023-01-15 16:06:06', '2023-01-15 16:06:06'),
(40, 2, 'Vendeu o Produto', 7, '2023-01-15 17:56:57', '2023-01-15 17:56:57');

-- --------------------------------------------------------

--
-- Estrutura para tabela `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_abrev` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ean` varchar(44) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `products`
--

INSERT INTO `products` (`id`, `name`, `name_abrev`, `ean`, `value`, `created_at`, `updated_at`) VALUES
(1, 'trem-das-11', 'Salve', '40028922', '0.09', '2023-01-15 15:13:12', '2023-01-15 15:13:12'),
(2, 'Salve', 'Salve', '40028922', '0.04', NULL, NULL),
(3, 'Salve', 'Salve', '40028922', '0.05', NULL, NULL),
(4, 'Salve', 'Salve', '40028922', '0.05', NULL, NULL),
(5, 'Salve', 'Salve', '40028922', '0.05', '2023-01-14 15:08:34', '2023-01-14 15:08:34'),
(6, 'wqr', 'qewr', '40028922', '0.00', '2023-01-14 18:12:22', '2023-01-14 18:12:22'),
(7, 'João Rafael', 'Salve', '99999', '0.13', '2023-01-14 18:13:02', '2023-01-14 18:13:02'),
(8, 'Salve', 'qwer', '40028922', '0.24', '2023-01-14 18:55:31', '2023-01-14 18:55:31'),
(9, 'Salve', 'qwer', '40028922', '0.24', '2023-01-14 18:59:45', '2023-01-14 18:59:45'),
(10, 'trem-das-112', 'Salve', '99999', '0.30', '2023-01-14 20:09:23', '2023-01-14 20:09:23'),
(11, 'trem-das-11', 'Salve', '99999', '0.30', '2023-01-15 10:51:53', '2023-01-15 10:51:53'),
(12, 'trem-das-112', 'Salve', '99999', '0.30', '2023-01-14 21:33:51', '2023-01-14 21:33:51'),
(13, 'trem-das-112', 'Salve', '99999', '0.30', '2023-01-14 21:37:59', '2023-01-14 21:37:59'),
(14, 'trem-das-112', 'Salve', '99999', '0.30', '2023-01-14 21:39:38', '2023-01-14 21:39:38'),
(15, 'trem-das-112', 'Salve', '99999', '0.30', '2023-01-14 21:42:56', '2023-01-14 21:42:56'),
(16, 'trem-das-112', 'Salve', '99999', '0.30', '2023-01-14 21:43:30', '2023-01-14 21:43:30'),
(17, 'trem-das-112', 'Salve', '99999', '0.30', '2023-01-14 21:43:52', '2023-01-14 21:43:52'),
(18, 'trem-das-112', 'Salve', '99999', '0.30', '2023-01-14 21:44:24', '2023-01-14 21:44:24'),
(19, 'trem-das-112', 'Salve', '99999', '0.30', '2023-01-14 21:44:41', '2023-01-14 21:44:41'),
(20, '2021', '20w', '65454654', '0.13', '2023-01-14 23:33:53', '2023-01-14 23:33:53'),
(21, '20', '20', '65454654', '0.09', '2023-01-14 21:54:05', '2023-01-14 21:54:05'),
(22, '20', '20', '65454654', '0.09', '2023-01-14 21:55:29', '2023-01-14 21:55:29'),
(23, '20', '20', '65454654', '0.09', '2023-01-14 22:27:59', '2023-01-14 22:27:59'),
(24, '20w', '20w', '65454654', '0.09', '2023-01-14 22:30:01', '2023-01-14 22:30:01'),
(25, 'trem', '123', '123', '0.16', '2023-01-14 23:14:58', '2023-01-14 23:14:58'),
(26, 'trem321', '1233', '1233', '0.31', '2023-01-14 23:30:05', '2023-01-14 23:30:05'),
(27, '40028922', '654654', '987654321', '1.13', '2023-01-14 23:58:24', '2023-01-14 23:58:24'),
(28, 'trem-das-', 'Salve', 'qtrewtwet', '0.14', '2023-01-15 11:02:30', '2023-01-15 11:02:30'),
(29, '29', '29', '65465456456', '0.38', '2023-01-15 11:03:58', '2023-01-15 11:03:58');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sales`
--

CREATE TABLE `sales` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `rebate` double(10,2) NOT NULL DEFAULT '0.00',
  `rebate_percent` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `product_id`, `value`, `rebate`, `rebate_percent`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '0.00', 12.00, 'on', '2023-01-15 15:10:41', '2023-01-15 15:10:41'),
(2, 1, 10, '0.30', 18.00, NULL, '2023-01-15 15:11:31', '2023-01-15 15:11:31'),
(3, 1, 1, '0.09', 10.00, NULL, '2023-01-15 15:13:21', '2023-01-15 15:13:21'),
(4, 1, 2, '0.04', 0.00, 'on', '2023-01-15 15:14:02', '2023-01-15 15:14:02'),
(5, 2, 6, '0.00', 0.02, NULL, '2023-01-15 16:06:06', '2023-01-15 16:06:06'),
(6, 2, 7, '0.13', 0.03, 'on', '2023-01-15 17:51:58', '2023-01-15 17:51:58'),
(7, 2, 7, '0.13', 0.03, 'on', '2023-01-15 17:54:21', '2023-01-15 17:54:21'),
(8, 2, 7, '0.13', 0.03, 'on', '2023-01-15 17:56:57', '2023-01-15 17:56:57');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rôbo', 'mr_robot@local.host', NULL, '$2y$10$6VJOouq4aahK0mYI4UpEVeVmoldgRkvA7sqvdMHyD1ZaFw3j8LA1O', NULL, '2023-01-13 16:28:02', '2023-01-13 16:28:02'),
(2, 'vendedor de torresmo', 'v@torresmo.com', NULL, '$2y$10$PZEs4NZHb2nHFz1tH7SUOePtniNyrU7RlsTFHQ3aZYAqlTgH0gzkW', NULL, '2023-01-15 16:01:23', '2023-01-15 16:01:23');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_user_id_foreign` (`user_id`),
  ADD KEY `logs_product_id_foreign` (`product_id`);

--
-- Índices de tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_user_id_foreign` (`user_id`),
  ADD KEY `sales_product_id_foreign` (`product_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `sales_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
