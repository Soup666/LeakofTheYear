<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221025191027 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE artist (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tape (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, release_year INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tape_artist (tape_id INT NOT NULL, artist_id INT NOT NULL, INDEX IDX_16F73CA32AC90C65 (tape_id), INDEX IDX_16F73CA3B7970CF8 (artist_id), PRIMARY KEY(tape_id, artist_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tape_artist ADD CONSTRAINT FK_16F73CA32AC90C65 FOREIGN KEY (tape_id) REFERENCES tape (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tape_artist ADD CONSTRAINT FK_16F73CA3B7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tape_artist DROP FOREIGN KEY FK_16F73CA32AC90C65');
        $this->addSql('ALTER TABLE tape_artist DROP FOREIGN KEY FK_16F73CA3B7970CF8');
        $this->addSql('DROP TABLE artist');
        $this->addSql('DROP TABLE tape');
        $this->addSql('DROP TABLE tape_artist');
        $this->addSql('ALTER TABLE `user` CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}
