CREATE TABLE contact (id BIGINT AUTO_INCREMENT, name VARCHAR(255), nick VARCHAR(255), addr1 VARCHAR(255), addr2 VARCHAR(255), city VARCHAR(255), state VARCHAR(2), zip VARCHAR(10), email1 VARCHAR(255), email2 VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE note (id BIGINT AUTO_INCREMENT, contact_id BIGINT NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX contact_id_idx (contact_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE note ADD CONSTRAINT note_contact_id_contact_id FOREIGN KEY (contact_id) REFERENCES contact(id) ON DELETE CASCADE;
