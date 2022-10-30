<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221030055059 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE review (id INT AUTO_INCREMENT NOT NULL, tape_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_794381C62AC90C65 (tape_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C62AC90C65 FOREIGN KEY (tape_id) REFERENCES tape (id)');
        $this->addSql('ALTER TABLE tape ADD author_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tape ADD CONSTRAINT FK_9EEBA5E1F675F31B FOREIGN KEY (author_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_9EEBA5E1F675F31B ON tape (author_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C62AC90C65');
        $this->addSql('DROP TABLE review');
        $this->addSql('ALTER TABLE tape DROP FOREIGN KEY FK_9EEBA5E1F675F31B');
        $this->addSql('DROP INDEX IDX_9EEBA5E1F675F31B ON tape');
        $this->addSql('ALTER TABLE tape DROP author_id');
    }
}
