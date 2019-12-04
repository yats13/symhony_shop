<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191204121809 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE product_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE category_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE volume_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE status_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE discount_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE stock_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE page_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE filter_group_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE country_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE category_product_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE category_parent_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE brand_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE product (id INT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, meta_title VARCHAR(255) NOT NULL, meta_description TEXT DEFAULT NULL, code VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, brand_id INT NOT NULL, content TEXT DEFAULT NULL, volume_value INT DEFAULT NULL, volume_id INT DEFAULT NULL, discount_id INT DEFAULT NULL, status_id INT NOT NULL, stock_id INT NOT NULL, price DOUBLE PRECISION NOT NULL, show BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE category (id INT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, content TEXT DEFAULT NULL, meta_title VARCHAR(255) DEFAULT NULL, meta_description TEXT DEFAULT NULL, show BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE volume (id INT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE status (id INT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE discount (id INT NOT NULL, title VARCHAR(255) NOT NULL, percent INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE stock (id INT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE page (id INT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, meta_name VARCHAR(255) DEFAULT NULL, meta_description TEXT DEFAULT NULL, content TEXT DEFAULT NULL, sort INT NOT NULL, show BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE filter_group (id INT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, status BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE country (id INT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE category_product (id INT NOT NULL, category_id INT NOT NULL, product_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE category_parent (id INT NOT NULL, category_id INT NOT NULL, category_parent INT NOT NULL, category_sort SMALLINT NOT NULL, category_level SMALLINT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE brand (id INT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, country_id INT NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE product_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE category_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE volume_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE status_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE discount_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE stock_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE page_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE filter_group_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE country_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE category_product_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE category_parent_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE brand_id_seq CASCADE');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE volume');
        $this->addSql('DROP TABLE status');
        $this->addSql('DROP TABLE discount');
        $this->addSql('DROP TABLE stock');
        $this->addSql('DROP TABLE page');
        $this->addSql('DROP TABLE filter_group');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE category_product');
        $this->addSql('DROP TABLE category_parent');
        $this->addSql('DROP TABLE brand');
    }
}
