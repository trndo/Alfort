<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181105195101 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE useful ADD a_title LONGTEXT DEFAULT NULL, ADD a_body LONGTEXT DEFAULT NULL, DROP a_title1, DROP a_body1, DROP a_title2, DROP a_body2');
        $this->addSql('ALTER TABLE adr CHANGE title1 title1 LONGTEXT DEFAULT NULL, CHANGE txt1 txt1 LONGTEXT DEFAULT NULL, CHANGE txt2 txt2 LONGTEXT DEFAULT NULL, CHANGE txt3 txt3 LONGTEXT DEFAULT NULL, CHANGE title2 title2 LONGTEXT DEFAULT NULL, CHANGE prdct1 prdct1 LONGTEXT DEFAULT NULL, CHANGE prdct2 prdct2 LONGTEXT DEFAULT NULL, CHANGE prdct3 prdct3 LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE smb CHANGE title1 title1 LONGTEXT DEFAULT NULL, CHANGE txt1 txt1 LONGTEXT DEFAULT NULL, CHANGE txt2 txt2 LONGTEXT DEFAULT NULL, CHANGE txt3 txt3 LONGTEXT DEFAULT NULL, CHANGE title2 title2 LONGTEXT DEFAULT NULL, CHANGE prdct1 prdct1 LONGTEXT DEFAULT NULL, CHANGE prdct2 prdct2 LONGTEXT DEFAULT NULL, CHANGE prdct3 prdct3 LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE home_page CHANGE about_us about_us LONGTEXT DEFAULT NULL, CHANGE title title LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE adr CHANGE title1 title1 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE txt1 txt1 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE txt2 txt2 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE txt3 txt3 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE title2 title2 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE prdct1 prdct1 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE prdct2 prdct2 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE prdct3 prdct3 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE home_page CHANGE title title LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE about_us about_us LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE smb CHANGE title1 title1 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE txt1 txt1 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE txt2 txt2 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE txt3 txt3 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE title2 title2 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE prdct1 prdct1 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE prdct2 prdct2 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE prdct3 prdct3 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE useful ADD a_title1 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, ADD a_body1 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, ADD a_title2 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, ADD a_body2 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, DROP a_title, DROP a_body');
    }
}
