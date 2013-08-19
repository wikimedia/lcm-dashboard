-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2013 at 03:13 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `lcmdashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `langdetail`
--

CREATE TABLE `langdetail` (
  `langcode_iso` varchar(20) NOT NULL,
  `langcode_wmf` varchar(20) NOT NULL,
  `langname_eng` varchar(50) NOT NULL,
  `langname_autonym` varchar(50) NOT NULL,
  `langname_html` varchar(20) NOT NULL,
  `macro_lang` varchar(1) NOT NULL,
  `wmf_proj_status` varchar(1) NOT NULL,
  `fallback_code` varchar(20) NOT NULL,
  `narayam` varchar(1) NOT NULL,
  `jquery_ime` varchar(1) NOT NULL,
  `webfonts` varchar(1) NOT NULL,
  `jquery_webfonts` varchar(1) NOT NULL,
  `i18n_mw_core` varchar(1) NOT NULL,
  `jquery_i18n` varchar(1) NOT NULL,
  `jquery_uls` varchar(1) NOT NULL,
  `translate` varchar(1) NOT NULL,
  `dictionary` varchar(1) NOT NULL,
  `spellchecker` varchar(1) NOT NULL,
  `glossary` varchar(1) NOT NULL,
  `f_or_i` varchar(1) NOT NULL,
  PRIMARY KEY (`langcode_iso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `langdetail`
--

INSERT INTO `langdetail` VALUES('aar', 'aa', 'Afar', 'Qafár af', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('abk', 'ab', 'Abkhaz', 'Аҧсшәа', 'ab', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ace', 'ace', 'Achinese', 'Acèh', 'ace', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ady', 'ady', 'Adyghe', 'Адыгэбзэ', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ady-cyrl', 'ady-cyrl', '', 'Адыгэбзэ', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('aeb', 'aeb', 'Tunisian Arabic', 'زَوُن', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('afr', 'af', 'Afrikaans', 'Afrikaans', 'af', '0', '0', '', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ahr', 'ahr', 'Ahirani', 'अहिराणी', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('aka', 'ak', 'Akan', 'Akan', 'ak', '1', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('akz', 'akz', 'Alabama', 'Albaamo innaaɬiilka', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('aln', 'aln', 'Gheg Albanian', 'Gegë', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('als', '', 'Tosk Albanian', 'Tosk', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('amh', 'am', 'Amharic', 'አማርኛ', 'am', '0', '0', '', '0', '1', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ang', 'ang', 'Old English', 'Ænglisc', 'ang', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('anp', 'anp', 'Angika', 'अङ्गिका', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ara', 'ar', 'Arabic', 'العربية', 'ar', '1', '0', '', '0', '1', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('arc', 'arc', 'Official Aramaic', 'ܐܪܡܝܐ', 'arc', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('arg', 'an', 'Aragonese', 'aragonés', 'an', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('arn', 'arn', 'Mapudungun', 'mapudungun', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('aro', 'aro', 'Araona', 'Araona', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('arq', 'arq', 'Algerian Arabic', 'Dziri', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ary', 'ary', 'Maroccan Arabic', 'Maġribi', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('arz', 'arz', 'Egyptian Arabic', 'مصرى', 'arz', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ase', 'ase', 'American Sign Language', 'American sign language', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('asm', 'as', 'Assamese', 'অসমীয়া', 'as', '0', '0', '', '0', '1', '1', '1', '1', '1', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ast', 'ast', 'Asturian', 'asturianu', 'ast', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ava', 'av', 'Avaric', 'авар', 'av', '0', '0', '', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('avk', 'avk', 'Kotava', 'Kotava', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('aym', 'ay', 'Aymara', 'Aymar aru', 'ay', '1', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('azb', 'azb', 'South Azerbaijani', 'تورکجه', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('aze', 'az', 'Azerbaijani', 'azərbaycanca', 'az', '1', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('aze-arab', 'az-arab', 'Azerbaijani - Arabic', 'آذربايجانج', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('aze-cyrl', 'az-cyrl', 'Azerbaijani - Cyrillic', 'азәрбајҹанҹа', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('aze-latn', 'az-latn', 'Azerbaijani - Latin', 'azərbaycanca', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bak', 'ba', 'Bashkir', 'башҡортса', 'ba', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bam', 'bm', 'Bamanakan/Bambara', 'bamanankan', 'bm', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bar', 'bar', 'Bavarian', 'Boarisch', 'bar', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bbc', 'bbc', 'Batak Toba', 'Batak Toba', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bbc-batk', 'bbc-batk', '', '(UNKNOWN)', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bbc-latn', 'bbc-latn', '', 'Batak Toba', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bcc', 'bcc', 'Southern Baluchi', 'بلوچی مکرانی', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bcl', 'bcl', 'Central Bikol', 'Bikol Central', 'bcl', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bel', 'be', 'Belarussian', 'беларуская', 'be', '0', '0', '', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bel-tarask', 'be-x-old', 'Belarussian Taraškievica', 'беларуская (тарашкевіца)‎', 'be-tarask', '0', '0', '', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ben', 'bn', 'Bengali', 'বাংলা', 'bn', '0', '0', '', '0', '1', '1', '1', '1', '1', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bew', 'bew', 'Betawi', 'Bahasa Betawi', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bfq', 'bfq', 'Badaga', 'படகா', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bho', 'bh', 'Bhojpuri', 'भोजपुरी', 'bho', '0', '0', '', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bis', 'bi', 'Bislama', 'Bislama', 'bi', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bjn', 'bjn', 'Banjar', 'Bahasa Banjar', 'bjn', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bod', 'bo', 'Tibetan', 'བོད་ཡིག', 'bo', '0', '0', '', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bos', 'bs', 'Bosnian', 'bosanski', 'bs', '0', '0', '', '0', '0', '0', '0', '0', '1', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bpy', 'bpy', 'Bishnupriya Manipuri', 'বিষ্ণুপ্রিয়া মণিপুরী', 'bpy', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bqi', 'bqi', 'Bakhtiari', 'بختياري', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bre', 'br', 'Breton', 'brezhoneg', 'br', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('brh', 'brh', 'Brahui', 'Bráhuí', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('brx', 'brx', 'Bodo', 'बोड़ो', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bto', 'bto', 'Rinconada Bikol', 'Iriga Bicolano', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bug', 'bug', 'Buginese', 'ᨅᨔ ᨕᨘᨁᨗ', '', '0', '0', '', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bul', 'bg', 'Bulgarian', 'български', 'bg', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('bxr', 'bxr', 'Russia Buriat', 'буряад', 'bxr', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('cat', 'ca', 'Catalan; Valencian', 'català', 'ca', '0', '0', '', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('cbk', '', 'Chavacano', 'Chavacano', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('cbk-zam', 'cbk-zam', 'Chavacano de Zamboanga', 'Chavacano de Zamboanga', 'cbk-zam', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('cdo', 'cdo', 'Min Dong Chinese', 'Mìng-dĕ̤ng-ngṳ̄', 'cdo', '0', '0', '', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ceb', 'ceb', 'Cebuano', 'Cebuano', 'ceb', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ces', 'cs', 'Czech', 'česky', 'cs', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('cha', 'ch', 'Chamorro', 'Chamoru', 'ch', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('che', 'ce', 'Chechen', 'нохчийн', 'ceb', '0', '0', '', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('cho', 'cho', 'Choctaw', 'Choctaw', 'cho', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('chr', 'chr', 'Cherokee', 'ᏣᎳᎩ', 'chr', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('chu', 'cu', 'Church Slavic', 'словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ', 'cu', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('chv', 'cv', 'Chuvash', 'Чӑвашла', 'cv', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('chy', 'chy', 'Cheyenne', 'Tsetsêhestâhese', 'chy', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ckb', 'ckb', 'Central Kurdish/Kurdish Sorani', 'کوردی', 'ckb', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('cor', 'kw', 'Cornish', 'kernowek', 'kw', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('cos', 'co', 'Corsican', 'corsu', 'co', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('cps', 'cps', 'Capiznon', 'Capiceño', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('cre', 'cr', 'Cree', 'Nēhiyawēwin / ᓀᐦᐃᔭᐍᐏᐣ', 'cr', '1', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('cre-cans', 'cr-cans', '', 'ᓀᐦᐃᔭᐍᐏᐣ', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('cre-latn', 'cr-latn', '', 'Nēhiyawēwin', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('crh', 'crh', '', 'qırımtatarca', 'crh-Latn', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('crh-cyrl', 'crh-cyrl', '', 'къырымтатарджа (Кирилл)', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('crh-latn', 'crh-latn', 'Crimean Tatar;Crimean Turkish', 'qırımtatarca (Latin)', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('csb', 'csb', 'Kashubian', 'kaszëbsczi', 'csb', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('cym', 'cy', 'Welsh', 'Cymraeg', 'cy', '0', '0', '', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('dan', 'da', 'Danish', 'dansk', 'da', '0', '0', '', '0', '1', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('deu', 'de', 'German', 'Deutsch', 'de', '0', '0', '', '0', '1', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('deu-at', 'de-at', 'Austrian German', 'Österreichisches Deutsch', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('deu-ch', 'de-ch', 'Swiss Standard German', 'Schweizer Hochdeutsch', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('deu-formal', 'de-formal', 'German - formal address', 'Deutsch (Sie-Form)', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('diq', 'diq', 'Dimli (individual language)', 'Zazaki', 'diq', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('div', 'dv', 'Divehi', 'ދިވެހިބަސް', 'dv', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('dsb', 'dsb', 'Lower Sobian', 'dolnoserbski', 'dsb', '0', '0', '', '0', '0', '0', '0', '0', '1', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('dtp', 'dtp', 'Dusun', 'Dusun Bundu-liwan', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('dzo', 'dz', 'Dzongkha', 'ཇོང་ཁ', 'dz', '0', '0', '', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('egl', 'eml', '', 'emiliàn e rumagnòl', 'eml', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ell', 'el', 'Greek', 'Ελληνικά', 'el', '0', '0', '', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('eng', 'en', 'English', 'English', 'en', '0', '0', '', '0', '1', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('eng-ca', 'en-ca', 'English (Canada)', 'English (Canada)', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('eng-gb', 'en-gb', 'English (Great Britain)', 'English (Great Britain)', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('epo', 'eo', 'Esperanto', 'Esperanto', 'eo', '0', '0', '', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('est', 'et', 'Estonian', 'eesti', 'et', '1', '0', '', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('esu', 'esu', '', 'Yup''ik', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('eus', 'eu', 'Basque', 'euskara', 'eu', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ewe', 'ee', 'Ewe', 'eʋegbe', 'ee', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ext', 'ext', 'Extremaduran', 'estremeñu', 'ext', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('fao', 'fo', 'Faroese', 'føroyskt', 'fo', '0', '0', '', '0', '1', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('fas', 'fa', 'Persian', 'فارسی', 'fa', '1', '0', '', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('fij', 'fj', 'Fijian', 'Na Vosa Vakaviti', 'fj', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('fin', 'fi', 'Finnish', 'suomi', 'fi', '0', '0', '', '0', '1', '0', '1', '0', '1', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('fit', 'fit', 'Tornedalen Finnish', 'meänkieli', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('fra', 'fr', 'French', 'français', 'fr', '0', '0', '', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('frc', 'frc', 'Cajun French', 'français cadien', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('frp', 'frp', 'Arpitan', 'arpetan', 'frp', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('frr', 'frr', 'Northern Frisian', 'Nordfriisk', 'frr', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('fry', 'fy', 'Western Frisian', 'Frysk', 'fy', '0', '0', '', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('ful', 'ff', 'Fulah', 'Fulfulde', 'ff', '1', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('fur', 'fur', 'Friulian', 'furlan', 'fur', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('gag', 'gag', 'Gagauz', 'Gagauz', 'gag', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('gah', 'gah', 'Alekano', 'Alekano', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('gan', 'gan', 'Gan Chinese', '贛語', 'gan', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('gan-hans', 'gan-hans', '', '赣语（简体', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('gan-hant', 'gan-hant', '', '贛語', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('gbz', 'gbz', 'Zoroastrian Dari', 'Dari', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('gcf', 'gcf', 'Guadeloupean Creole French', 'Guadeloupean Creole French', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('gla', 'gd', 'Gaelic; Scottish Gaelic', 'Gàidhlig', 'gd', '0', '0', '', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('gle', 'ga', 'Irish', 'Gaeilge', 'ga', '0', '0', '', '0', '0', '0', '1', '0', '1', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('glg', 'gl', 'Galician', 'galego', 'gl', '0', '0', '', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('glk', 'glk', 'Gilaki', 'گیلکی', 'glk', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('glv', 'gv', 'Manx', 'Gaelg', 'gv', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('gom', 'gom', 'Konkani', 'कोंकणी', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
INSERT INTO `langdetail` VALUES('gom-deva', 'gom-deva', '', 'कोंकणी', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '', 'f');
