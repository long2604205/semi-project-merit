<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230401082312 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE film_actor (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE movie');
        $this->addSql('DROP INDEX actor_id_3 ON actor_movie');
        $this->addSql('DROP INDEX actor_id_2 ON actor_movie');
        $this->addSql('DROP INDEX actor_id ON actor_movie');
        $this->addSql('ALTER TABLE actor_movie ADD id INT AUTO_INCREMENT NOT NULL, ADD title VARCHAR(255) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE movie (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, duration VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, release_year DATE DEFAULT NULL, image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, video VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, country VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, publisher VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE film_actor');
        $this->addSql('ALTER TABLE actor_movie MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON actor_movie');
        $this->addSql('ALTER TABLE actor_movie DROP id, DROP title');
        $this->addSql('CREATE INDEX actor_id_3 ON actor_movie (actor_id, movie_id)');
        $this->addSql('CREATE INDEX actor_id_2 ON actor_movie (actor_id, movie_id)');
        $this->addSql('CREATE INDEX actor_id ON actor_movie (actor_id, movie_id)');
        $this->addSql('ALTER TABLE actor_movie ADD PRIMARY KEY (actor_id, movie_id)');
    }
}
