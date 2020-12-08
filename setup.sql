Create table data_rawtable (
    uid int(11) unsigned NOT NULL auto_increment,
    crdate int(11) unsigned DEFAULT "0" NOT NULL,
    chdate INT(11) unsigned DEFAULT "0" NOT NULL,
    dblob text DEFAULT "" NOT NULL,
    label varchar(255) DEFAULT "" NOT NULL,
    group int(11) DEFAULT "0" NOT NULL
);