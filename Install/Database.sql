create table examo_logs
(
    key_log bigint unsigned auto_increment,
    ts timestamp not null,
    tags varchar(1000) not null,
    data json not null,
    constraint examo_logs_pk
        primary key (key_log)
);

create table examo_config
(
    key_config varchar(100) not null,
    data json not null,
    constraint examo_config_pk
        primary key (key_config)
);

create table examo_suites
(
	key_suite varchar(1000) not null,
	title varchar(100) not null,
	program text not null,
	mark tinyint unsigned default 0 not null,
	data json not null,
	constraint examo_suites_pk
		primary key (key_suite)
);

create table examo_tests
(
	key_test varchar(100) not null,
	key_suite varchar(1000) not null,
	title varchar(100) not null,
	program json not null,
	status tinyint unsigned default 1 not null,
	type tinyint unsigned default 1 not null,
	done tinyint unsigned default 0 not null,
	hint text not null,
	note text not null,
	constraint examo_tests_pk
		primary key (key_suite, key_test),
    constraint examo_tests_key_suite_fk
        foreign key (key_suite) references examo_suites (key_suite)
            on update cascade on delete cascade
);

