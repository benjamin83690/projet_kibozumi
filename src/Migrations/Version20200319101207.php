<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200319101207 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE credit (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, mensualites INT NOT NULL, nombres_mensualites INT NOT NULL, montant_emprunte INT NOT NULL, taux_fixe DOUBLE PRECISION NOT NULL, montant_total DOUBLE PRECISION NOT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone INT NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_credit (user_id INT NOT NULL, credit_id INT NOT NULL, INDEX IDX_799375C3A76ED395 (user_id), INDEX IDX_799375C3CE062FF9 (credit_id), PRIMARY KEY(user_id, credit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_credit ADD CONSTRAINT FK_799375C3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_credit ADD CONSTRAINT FK_799375C3CE062FF9 FOREIGN KEY (credit_id) REFERENCES credit (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_credit DROP FOREIGN KEY FK_799375C3CE062FF9');
        $this->addSql('ALTER TABLE user_credit DROP FOREIGN KEY FK_799375C3A76ED395');
        $this->addSql('DROP TABLE credit');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_credit');
    }
}
