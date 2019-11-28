

CREATE TABLE`lieux`(`id`int(11)NOT NULL,
	`nom`varchar(64)COLLATE utf8mb4_unicode_ci NOT NULL,
	`commentaire`text COLLATE utf8mb4_unicode_ci NOT NULL) 
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ;


CREATE TABLE`manifestations`(`id`int(11) NOT NULL,
	`lieux`int(11)NOT NULL,`membre`int(11) NOT NULL,
	`date`date NOT NULL) 
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ;


CREATE TABLE`membres`(`id`int(11) NOT NULL,
	`prenom`varchar(25)COLLATE utf8mb4_unicode_ci NOT NULL,
	`nom`varchar(25)COLLATE utf8mb4_unicode_ci NOT NULL,
	`datenaissance`date NOT NULL,
	`photo`varchar(64)
	COLLATE utf8mb4_unicode_ci NOT NULL,
	`fonction`enum('CADRE','DELEGUE','MEMBRE')
	COLLATE utf8mb4_unicode_ci NOT NULL) 
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ;