CREATE TABLE t_application_translation (id BIGINT, name VARCHAR(200) NOT NULL, description TEXT NOT NULL, meta_description TEXT, lang CHAR(2), slug VARCHAR(255), UNIQUE INDEX t_application_translation_sluggable_idx (slug, lang, name), PRIMARY KEY(id, lang)) DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ENGINE = INNODB;
CREATE TABLE t_application (id BIGINT AUTO_INCREMENT, rank BIGINT, image VARCHAR(200), url VARCHAR(255), active CHAR(1) DEFAULT '0' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX i_active_idx (active), INDEX i_url_idx (url), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ENGINE = INNODB;
CREATE TABLE t_news_translation (id BIGINT, title VARCHAR(200) NOT NULL, description TEXT NOT NULL, lang CHAR(2), slug VARCHAR(255), UNIQUE INDEX t_news_translation_sluggable_idx (slug, lang, title), PRIMARY KEY(id, lang)) DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ENGINE = INNODB;
CREATE TABLE t_news (id BIGINT AUTO_INCREMENT, active CHAR(1) DEFAULT '0' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX i_active_idx (active), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ENGINE = INNODB;
CREATE TABLE t_service_translation (id BIGINT, name VARCHAR(200) NOT NULL, description TEXT NOT NULL, lang CHAR(2), slug VARCHAR(255), UNIQUE INDEX t_service_translation_sluggable_idx (slug, lang, name), PRIMARY KEY(id, lang)) DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ENGINE = INNODB;
CREATE TABLE t_service (id BIGINT AUTO_INCREMENT, rank BIGINT, image VARCHAR(200), url VARCHAR(255), active CHAR(1) DEFAULT '0' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX i_active_idx (active), INDEX i_url_idx (url), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ENGINE = INNODB;
CREATE TABLE t_team_translation (id BIGINT, description TEXT NOT NULL, lang CHAR(2), PRIMARY KEY(id, lang)) DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ENGINE = INNODB;
CREATE TABLE t_team (id BIGINT AUTO_INCREMENT, rank BIGINT, name VARCHAR(200) NOT NULL, image VARCHAR(200), url VARCHAR(255), active CHAR(1) DEFAULT '0' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), INDEX i_active_idx (active), INDEX i_url_idx (url), UNIQUE INDEX t_team_sluggable_idx (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ENGINE = INNODB;
CREATE TABLE t_user (id BIGINT AUTO_INCREMENT, realname VARCHAR(200) NOT NULL, username VARCHAR(50) NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(100) NOT NULL, url VARCHAR(255), twitter_username VARCHAR(100), phone VARCHAR(100), active CHAR(1) DEFAULT '0' NOT NULL, last_access_at DATETIME, slug VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX i_username_idx (username), UNIQUE INDEX u_email_idx (email), INDEX i_url_idx (url), INDEX i_twitter_username_idx (twitter_username), INDEX i_active_idx (active), UNIQUE INDEX t_user_sluggable_idx (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ENGINE = INNODB;
CREATE TABLE t_visit (id BIGINT AUTO_INCREMENT, remote_address VARCHAR(50) NOT NULL, remote_port VARCHAR(50) NOT NULL, http_user_agent VARCHAR(255) NOT NULL, datetime datetime NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX i_remote_address_idx (remote_address), INDEX i_datetime_idx (datetime), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ENGINE = INNODB;
ALTER TABLE t_application_translation ADD CONSTRAINT t_application_translation_id_t_application_id FOREIGN KEY (id) REFERENCES t_application(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE t_news_translation ADD CONSTRAINT t_news_translation_id_t_news_id FOREIGN KEY (id) REFERENCES t_news(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE t_service_translation ADD CONSTRAINT t_service_translation_id_t_service_id FOREIGN KEY (id) REFERENCES t_service(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE t_team_translation ADD CONSTRAINT t_team_translation_id_t_team_id FOREIGN KEY (id) REFERENCES t_team(id) ON UPDATE CASCADE ON DELETE CASCADE;
