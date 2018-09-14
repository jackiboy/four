<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180914125751 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE symfony_demo_comment');
        $this->addSql('DROP TABLE symfony_demo_post');
        $this->addSql('DROP TABLE symfony_demo_post_tag');
        $this->addSql('DROP TABLE symfony_demo_tag');
        $this->addSql('DROP TABLE symfony_demo_user');
        $this->addSql('ALTER TABLE bolt_field DROP FOREIGN KEY FK_4A2EBBE584A0A3ED');
        $this->addSql('DROP INDEX IDX_4A2EBBE584A0A3ED ON bolt_field');
        $this->addSql('ALTER TABLE bolt_field CHANGE content_id content_id INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE symfony_demo_comment (id INT AUTO_INCREMENT NOT NULL, post_id INT NOT NULL, author_id INT NOT NULL, content LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, published_at DATETIME NOT NULL, INDEX IDX_53AD8F834B89032C (post_id), INDEX IDX_53AD8F83F675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE symfony_demo_post (id INT AUTO_INCREMENT NOT NULL, author_id INT NOT NULL, title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, slug VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, summary VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, content LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, published_at DATETIME NOT NULL, INDEX IDX_58A92E65F675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE symfony_demo_post_tag (post_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_6ABC1CC44B89032C (post_id), INDEX IDX_6ABC1CC4BAD26311 (tag_id), PRIMARY KEY(post_id, tag_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE symfony_demo_tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL COLLATE utf8mb4_unicode_ci, UNIQUE INDEX UNIQ_4D5855405E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE symfony_demo_user (id INT AUTO_INCREMENT NOT NULL, full_name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, username VARCHAR(190) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(190) NOT NULL COLLATE utf8mb4_unicode_ci, password VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, roles LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci COMMENT \'(DC2Type:json)\', UNIQUE INDEX UNIQ_8FB094A1F85E0677 (username), UNIQUE INDEX UNIQ_8FB094A1E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bolt_field CHANGE content_id content_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bolt_field ADD CONSTRAINT FK_4A2EBBE584A0A3ED FOREIGN KEY (content_id) REFERENCES bolt_content (id)');
        $this->addSql('CREATE INDEX IDX_4A2EBBE584A0A3ED ON bolt_field (content_id)');
    }
}
