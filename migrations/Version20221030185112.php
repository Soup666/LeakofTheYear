<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221030185112 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE genre (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE label (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tape_genre (tape_id INT NOT NULL, genre_id INT NOT NULL, INDEX IDX_9A4454662AC90C65 (tape_id), INDEX IDX_9A4454664296D31F (genre_id), PRIMARY KEY(tape_id, genre_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tape_tag (tape_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_55AF83CB2AC90C65 (tape_id), INDEX IDX_55AF83CBBAD26311 (tag_id), PRIMARY KEY(tape_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tape_genre ADD CONSTRAINT FK_9A4454662AC90C65 FOREIGN KEY (tape_id) REFERENCES tape (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tape_genre ADD CONSTRAINT FK_9A4454664296D31F FOREIGN KEY (genre_id) REFERENCES genre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tape_tag ADD CONSTRAINT FK_55AF83CB2AC90C65 FOREIGN KEY (tape_id) REFERENCES tape (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tape_tag ADD CONSTRAINT FK_55AF83CBBAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tape ADD label_id INT DEFAULT NULL, ADD format VARCHAR(255) DEFAULT NULL, ADD release_date DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE tape ADD CONSTRAINT FK_9EEBA5E133B92F39 FOREIGN KEY (label_id) REFERENCES label (id)');
        $this->addSql('CREATE INDEX IDX_9EEBA5E133B92F39 ON tape (label_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tape DROP FOREIGN KEY FK_9EEBA5E133B92F39');
        $this->addSql('ALTER TABLE tape_genre DROP FOREIGN KEY FK_9A4454662AC90C65');
        $this->addSql('ALTER TABLE tape_genre DROP FOREIGN KEY FK_9A4454664296D31F');
        $this->addSql('ALTER TABLE tape_tag DROP FOREIGN KEY FK_55AF83CB2AC90C65');
        $this->addSql('ALTER TABLE tape_tag DROP FOREIGN KEY FK_55AF83CBBAD26311');
        $this->addSql('DROP TABLE genre');
        $this->addSql('DROP TABLE label');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE tape_genre');
        $this->addSql('DROP TABLE tape_tag');
        $this->addSql('DROP INDEX IDX_9EEBA5E133B92F39 ON tape');
        $this->addSql('ALTER TABLE tape DROP label_id, DROP format, DROP release_date');
    }
}
