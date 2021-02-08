DROP TABLE IF EXISTS `constructors`;

CREATE TABLE `constructors` (
  `constructorId` int(11) NOT NULL AUTO_INCREMENT,
  `constructorRef` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `nationality` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`constructorId`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `draftable_drivers`;

CREATE TABLE `draftable_drivers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `driverCode` char(3) NOT NULL,
  `driverId` int(10) unsigned NOT NULL,
  `driverRef` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `portraitUrl` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `draftable_drivers_driverid_unique` (`driverId`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `draftpicks`;

CREATE TABLE `draftpicks` (
  `draftId` int(11) NOT NULL,
  `raceId` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `primaryDriverId` int(11) NOT NULL,
  `secondaryDriverId` int(11) NOT NULL,
  `turboDriverId` int(11) NOT NULL,
  `constructorId` int(11) NOT NULL,
  `pickOrder` int(3) NOT NULL,
  PRIMARY KEY (`draftId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `races`;

CREATE TABLE `races` (
  `raceId` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL DEFAULT 0,
  `round` int(11) NOT NULL DEFAULT 0,
  `circuitId` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT '0000-00-00',
  `time` time DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`raceId`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM AUTO_INCREMENT=1074 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `drivers`;

CREATE TABLE `drivers` (
  `driverId` int(11) NOT NULL AUTO_INCREMENT,
  `driverRef` varchar(255) NOT NULL DEFAULT '',
  `number` int(11) DEFAULT NULL,
  `code` varchar(3) DEFAULT NULL,
  `forename` varchar(255) NOT NULL DEFAULT '',
  `surname` varchar(255) NOT NULL DEFAULT '',
  `dob` date DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`driverId`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=850 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `teammanagers`;

CREATE TABLE `teammanagers` (
  `teamOwnerId` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `handleName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`teamOwnerId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

        $teamOwner = new App\Models\Clients\TeamManager([
            'teamOwnerId' => 1,
            'firstName' => "Nick",
            'lastName' => "Lematrie",
            'dob' => "1999-12-31",
            'handle' => "nicklemaitre"
        ]);
        $teamOwner->save();

        $teamOwner = new App\Models\Clients\TeamManager([
            'teamOwnerId' => 2,
            'firstName' => "Philippe",
            'lastName' => "Lematrie",
            'dob' => "1999-12-31",
            'handle' => "olivierlouis"
        ]);
        $teamOwner->save();

        $teamOwner = new App\Models\Clients\TeamManager([
            'teamOwnerId' => 3,
            'firstName' => "Trey",
            'lastName' => "Causey",
            'dob' => "1981-03-27",
            'handle' => "tomato"
        ]);
        $teamOwner->save();

        $teamOwner = new App\Models\Clients\TeamManager([
            'teamOwnerId' => 4,
            'firstName' => "Casey",
            'lastName' => "Tuggle",
            'dob' => "1982-08-30",
            'handle' => "caseytuggle"
        ]);
        $teamOwner->save();

        $teamOwner = new App\Models\Clients\TeamManager([
            'teamOwnerId' => 5,
            'firstName' => "Olivier",
            'lastName' => "LeMaitre",
            'dob' => "1999-12-31",
            'handle' => "oliviverlemaitre"
        ]);
        $teamOwner->save();

        $teamOwner = new App\Models\Clients\TeamManager([
            'teamOwnerId' => 6,
            'firstName' => "Andrew",
            'lastName' => "Fox",
            'dob' => "1992-07-23",
            'handle' => "andrewfox"
        ]);
        $teamOwner->save();

        $teamOwner = new App\Models\Clients\TeamManager([
            'teamOwnerId' => 7,
            'firstName' => "George",
            'lastName' => "Nelson",
            'dob' => "1999-12-31",
            'handle' => "babyface"
        ]);
        $teamOwner->save();