CREATE TABLE `lh_group_object` ( `id` bigint(20) NOT NULL AUTO_INCREMENT, `object_id` bigint(20) NOT NULL, `group_id` bigint(20) NOT NULL, `type` bigint(20) NOT NULL, PRIMARY KEY (`id`), KEY `object_id_type` (`object_id`,`type`)) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;