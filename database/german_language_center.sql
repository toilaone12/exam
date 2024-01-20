-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 20, 2024 lúc 10:06 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `german_language_center`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `assignment`
--

CREATE TABLE `assignment` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `assignment`
--

INSERT INTO `assignment` (`id`, `name`, `list_question`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>5. Teil 5: </strong>(Arbeitszeit: 10 Minuten)</p>\r\n\r\n<p>Lesen Sie die Aufgaben 27 bis 30 und den Text dazu. W&auml;hlen Sie bei jeder Aufgabe die richtige L&ouml;sung a, b, oder c.</p>\r\n\r\n<p>Sie lesen die Anmeldeinformationen der SommerKinderUni Graz, weil Sie im Programm der Universit&auml;t interessante Angebote gefunden haben.</p>\r\n\r\n<h3 style=\"text-align:center\"><span style=\"font-size:26px\"><strong>SommerKinderUni</strong></span></h3>\r\n\r\n<h4 style=\"text-align:center\"><span style=\"font-size:24px\"><strong>Anmeldeinformationen</strong></span></h4>\r\n\r\n<p><strong>Aufnahme und Anmeldung:</strong></p>\r\n\r\n<p>Die SommerKinder Uni Graz ist f&uuml;r Kinder bzw. Jugendliche im Alter von 9 bis 15 Jahren empfohlen. Anmeldungen beginnen am 22. Juni. Die Anmeldung ist nur f&uuml;r ganze Wochen &uuml;ber die Homepage der KinderUni Graz m&ouml;glich. Insgesamt werden f&uuml;r die Veranstaltungen (Workshops) bis zu max. 60 Kinder pro Woche aufgenommen.</p>\r\n\r\n<p><strong>&Ouml;ffnungszeiten:</strong></p>\r\n\r\n<p>Die SommerKinderUni Graz ist vom 11. Juli bis zum 29. Juli ge&ouml;ffnet. Die Betreuung ist von Montag bis Freitag von 8.00 bis 17.00 Uhr ganztags m&ouml;glich. Erster gemeinsamer Treffpunkt aller Teilnehmerinnen ist immer Montag fr&uuml;h um 8.15 Uhr im Seminarraum SR 15.03, (Universit&auml;tsstra&szlig;e 15, Erdgescho&szlig;), Karl- Franzens-Universit&auml;t.</p>\r\n\r\n<p><strong>Kosten:</strong></p>\r\n\r\n<p>Pro Woche f&auml;llt eine Verpflegungspauschale in der H&ouml;he von 45,00 &euro; an. Dieser Beitrag wird in bar jeweils am Montag in der Fr&uuml;h, am allgemeinen Treffpunkt SR 15.03, f&uuml;r die laufende Woche eingehoben. Er inkludiert Fr&uuml;hst&uuml;ck, Jause, Mittagessen und Getr&auml;nke.</p>\r\n\r\n<p><strong>Erkrankung/Fernbleiben:</strong></p>\r\n\r\n<p>Erkrankt ein Kind, oder ist es verhindert die Sommer- Kinder Uni Graz zu besuchen, so ist dies umgehend im KinderUniB&uuml;ro bekannt zu geben. Den Betreuerinnen ist es nicht gestattet, Medikamente zu verabreichen. Bei Vorliegen einer Allergie bitten wir Sie, diese bekannt zu geben und entsprechende Notfallsmedikamente zur SommerKinderUni Graz mitzugeben.</p>\r\n\r\n<p><strong>&Uuml;bergabe und Abholung Ihres Kindes:</strong></p>\r\n\r\n<p>Die Eltern haben daf&uuml;r zu sorgen, dass Jugendliche im Alter von 9 bis 15 Jahren von den Eltern selbst oder deren bevollm&auml;chtigten Vertretern ordnungsgem&auml;&szlig; in die Obhut der Betreuerinnen der SommerkinderUni Graz &uuml;bergeben und von dort wieder abgeholt werden. Alleiniges Nach-Hause-Gehen muss von den Eltern im Vorhinein mittels Unterschrift best&auml;tigt werden.</p>', '|1|', '2024-01-19 10:21:44', '2024-01-19 10:55:22'),
(3, '<h3><strong>4. Teil 4:&nbsp;</strong>(Arbeitszeit: 15 Minuten)</h3>\r\n\r\n<p>Lesen Sie die Texte 20 bis 26. W&auml;hlen Sie: Ist die Person&nbsp;<strong><em>f&uuml;r die Einf&uuml;hrung eines Internet-Ausweises?</em></strong></p>\r\n\r\n<p>In einem deutschsprachigen Forum lesen Sie folgende Antworten auf die Frage, ob jeder Internet- Nutzer einen besonderen Ausweis haben sollte, damit Missbrauch des Netzes verhindert wird.</p>\r\n\r\n<p><strong>Beispiel</strong></p>\r\n\r\n<p>0 Kilian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ja&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nein</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:22px\"><strong>Aus einem Internetforum</strong></span></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Beispiel</strong></p>\r\n\r\n			<p>Ich bin ohne Internet gro&szlig; geworden und vieles, was damit zusammenh&auml;ngt, verstehe ich nicht ganz. Als Mensch und B&uuml;rger wei&szlig; ich aber, dass ich f&uuml;r alles, was ich tue, die Verantwortung trage und dass ich zum Beispiel niemanden ungestraft beleidigen darf. So ein Ausweis w&auml;re also meiner Ansicht nach ein Schritt in die richtige Richtung.</p>\r\n\r\n			<p>Kilian, 61, Wiesbaden</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>23</strong>&nbsp;Bitte nicht noch mehr B&uuml;rokratie! Wenn ich jemanden beleidigen will, wird er mich schon finden. Ich glaube, wir haben schon genug Gesetze, die alles Zwischenmenschliche regeln und Strafen vorsehen. Auch f&uuml;r das Internet d&uuml;rfte es bereits ausreichende Regelungen geben. Ein Ausweis f&uuml;r dessen Nutzung ist meines Erachtens absolut unn&ouml;tig.</p>\r\n\r\n			<p>Jannik, 42, Gelsenkirchen</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>20</strong>&nbsp;Ein Internetausweis w&auml;re die Vorstufe zur totalen Internetkontrolle. Wer keine Kritik mag, hat immer ein Interesse daran, Meinung und Gedanken zu zensieren. Die Gedanken sind aber frei. Das soll so bleiben und ist die einzige Garantie daf&uuml;r, dass man seine Rechte und Freiheiten verteidigen kann.</p>\r\n\r\n			<p>Roswitha, 55, Augsburg</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24</strong>&nbsp;Ich kann zwar die Rufe nach Meinungsfreiheit gut verstehen, jedoch habe ich starke Zweifel, ob die Anonymit&auml;t im Netz immer von Vorteil ist. Warum sollte man sich im Internet nicht zu seiner Identit&auml;t bekennen, wenn man nichts zu verbergen hat? Nur wer - egal aus welchem Grund- unerkannt bleiben m&ouml;chte, w&auml;re gegen den Internetausweis.</p>\r\n\r\n			<p>Ramona, 46, Braunschweig</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>21</strong>&nbsp;Was ist der eigentliche Zweck dieser Geschichte? Wer offen und deutlich seine Ansichten im Internet pr&auml;sentieren m&ouml;chte, der soll es sich vorher zweimal &uuml;berlegen und vielleicht lieber der Mund halten? Wenn aber die freie Meinungs&auml;u&szlig;erung auf diese Weise kriminalisiert wird, dann sehe ich wirklich schwarz f&uuml;r unsere ach so fortschrittliche Gesellschaft.</p>\r\n\r\n			<p>Yvonne, 34, Aachen</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>25</strong>&nbsp;Diese Diskussion ist v&ouml;llig sinnlos, denn bereits heute kann man jeden am Internet angeschlossenen Rechner anhand der sogenannten &quot;IP-Adresse&quot; identifizieren. Oder will man am Ende in jedem Ger&auml;t auch eine Kamera installieren, damit man sehen kann, wer gerade daran sitzt und arbeitet? Diese Art von Big Brother brauchen wir nicht!</p>\r\n\r\n			<p>Bruno, 29, Chemnitz</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>22&nbsp;</strong>Warum muss denn jeder, der Auto fahren m&ouml;chte, zuerst einmal den F&uuml;hrerschein machen? Doch nur damit er lernt, wie er sich im Stra&szlig;enverkehr zu verhalten hat und bei Verst&ouml;&szlig;en gegen die Stra&szlig;enverkehrsordnung zur Rechenschaft gezogen werden kann. Das finden, denke ich, alle richtig.</p>\r\n\r\n			<p>Dietmar, 57, M&ouml;nchengladbach</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>26&nbsp;</strong>Wie der Name schon sagt, ist das Internet ein internationales Netz. Dass es praktisch der gesamten Menschheit geh&ouml;rt, hat aber nicht zu bedeuten, dass es keinen Gesetzen und Vorschriften folgen muss. Ich w&uuml;rde im Gegenteil f&uuml;r die Einf&uuml;hrung eines internationalen Internetausweises pl&auml;dieren, den jeder zivilisierte Staat seinen B&uuml;rgern ausstellen w&uuml;rde.</p>\r\n\r\n			<p>Patrizia, 39, Kiel</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '|5|6|', '2024-01-19 21:25:14', '2024-01-19 21:25:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exam`
--

CREATE TABLE `exam` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_level` int(11) NOT NULL,
  `id_lesson` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_assignment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `exam`
--

INSERT INTO `exam` (`id`, `id_level`, `id_lesson`, `name`, `list_assignment`, `duration`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Test 40 - Lesen - Teil 4', '|3|', 15, NULL, '2024-01-19 21:35:59'),
(2, 3, 1, 'Test 40 - Lesen - Teil 5', '|1|', 10, '2024-01-19 21:22:17', '2024-01-19 21:22:17'),
(3, 1, 1, 'Test 40 - Lesen - Teil 3', '|1|3|', 5, '2024-01-19 21:36:14', '2024-01-19 21:36:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lesson`
--

CREATE TABLE `lesson` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lesson`
--

INSERT INTO `lesson` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Đọc hiểu', NULL, NULL),
(2, 'Nghe hiểu', '2024-01-19 02:18:52', '2024-01-19 02:18:52'),
(3, 'Từ vựng - Ngữ pháp', '2024-01-19 02:19:38', '2024-01-19 02:19:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `level`
--

CREATE TABLE `level` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `level`
--

INSERT INTO `level` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A1', '2024-01-19 02:46:42', '2024-01-19 02:46:42'),
(2, 'A2', '2024-01-19 02:46:47', '2024-01-19 02:46:47'),
(3, 'B1', '2024-01-19 02:46:51', '2024-01-19 02:46:51'),
(4, 'B2', '2024-01-19 02:46:58', '2024-01-19 02:46:58'),
(5, 'C', '2024-01-19 02:47:02', '2024-01-19 02:47:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2024_01_19_074038_create_lesson', 1),
(5, '2024_01_19_074120_create_level', 1),
(6, '2024_01_19_074126_create_account', 1),
(7, '2024_01_19_074227_create_exam', 1),
(8, '2024_01_19_144903_create_question', 2),
(9, '2024_01_19_162206_create_assignment', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question`
--

CREATE TABLE `question` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_d` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `question`
--

INSERT INTO `question` (`id`, `name`, `answer_a`, `answer_b`, `answer_c`, `answer_d`, `answer`, `created_at`, `updated_at`) VALUES
(1, '27 Eltern können schriftlich erklären, dass...', 'ihr Kind von einem Betreuer abgeholt werden soll.', 'sie selbst ihr Kind zur Uni bringen.\r\n\r\n', 'ihr Kind selbstständig nach Hause geht.', NULL, 'C', NULL, NULL),
(2, '28 Für das Essen der Kinder ...', 'müssen die Eltern selbst sorgen.', 'zahlen die Eltern wöchentlich eine bestimmte Summe.', 'müssen die Eltern ihren Kindern täglich Geld mitgeben.', NULL, 'B', '2024-01-19 08:56:45', '2024-01-19 09:03:03'),
(4, 'Medikamente...', 'dürfen die Betreuer den Kindern nicht geben.', 'kann man im Notfall im KinderUniBüro bekommen.', 'für Allergiker müssen im KinderUniBüro abgegeben werden.', NULL, 'A', '2024-01-19 08:58:01', '2024-01-19 08:58:01'),
(5, '20 Roswitha', 'Ja', 'Nein', NULL, NULL, 'B', '2024-01-19 21:24:23', '2024-01-19 21:24:23'),
(6, '21 Yvonne', 'Ja', 'Nein', NULL, NULL, 'B', '2024-01-19 21:24:45', '2024-01-19 21:24:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `level`
--
ALTER TABLE `level`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `question`
--
ALTER TABLE `question`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
