CREATE TABLE IF NOT EXISTS `user`
(
    `id`           int          auto_increment primary key,
    `call_name`    varchar(32)  not null,
    `age`          int          not null,
    `email`        varchar(255) not null,
    `password`     varchar(255) not null,
    `phone_number` varchar(16)  not null,
    `motivation`   longtext     null,
    `gender`       VARCHAR(255) null,
    `town`         VARCHAR(255) null,
    CONSTRAINT `unique.user` UNIQUE (`call_name`, `email`)
);
