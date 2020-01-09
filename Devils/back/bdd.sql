create table follow
(
    id_follow    int auto_increment
        primary key,
    id_user      int null,
    id_following int null
);

create table membres
(
    id_user      int auto_increment
        primary key,
    username     varchar(255)                     not null,
    pasword      text                             not null,
    email        varchar(255)                     null,
    firstname    varchar(255)                     null,
    lastname     varchar(255)                     null,
    date_sign_in date default current_timestamp() not null,
    birthday     date                             null,
    bio          varchar(255)                     null
);


