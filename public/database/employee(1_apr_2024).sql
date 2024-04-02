-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2024 at 07:42 PM
-- Server version: 8.0.36-0ubuntu0.20.04.1
-- PHP Version: 7.0.33-68+ubuntu20.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement_master`
--

CREATE TABLE `announcement_master` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_general_ci,
  `announcement_date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `company_id` int NOT NULL,
  `email_sent` enum('Yes','No') COLLATE utf8mb4_general_ci DEFAULT 'No',
  `added_by` int DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_general_ci DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement_master`
--

INSERT INTO `announcement_master` (`id`, `title`, `content`, `announcement_date`, `company_id`, `email_sent`, `added_by`, `added_on`, `updated_by`, `updated_on`, `status`) VALUES
(1, 'Add Announcement1', '<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<h3>Add Announcementtt</h3>\n<p>&nbsp;</p>\n<p>hsghgshgsh</p>\n</body>\n</html>', '03/22/2024', 1, 'No', 0, '2024-03-15 14:33:49', 0, '2024-03-15 17:27:59', 'Active'),
(3, 'Important Announcement', '<head><style id=\"mceDefaultStyles\" type=\"text/css\">.mce-content-body div.mce-resizehandle {position: absolute;border: 1px solid black;box-sizing: content-box;background: #FFF;width: 7px;height: 7px;z-index: 10000}.mce-content-body .mce-resizehandle:hover {background: #000}.mce-content-body img[data-mce-selected],.mce-content-body hr[data-mce-selected] {outline: 1px solid black;resize: none}.mce-content-body .mce-clonedresizable {position: absolute;outline: 1px dashed black;opacity: .5;filter: alpha(opacity=50);z-index: 10000}.mce-content-body .mce-resize-helper {background: #555;background: rgba(0,0,0,0.75);border-radius: 3px;border: 1px;color: white;display: none;font-family: sans-serif;font-size: 12px;white-space: nowrap;line-height: 14px;margin: 5px 10px;padding: 5px;position: absolute;z-index: 10001}\r\n.mce-visual-caret {position: absolute;background-color: black;background-color: currentcolor;}.mce-visual-caret-hidden {display: none;}*[data-mce-caret] {position: absolute;left: -1000px;right: auto;top: 0;margin: 0;padding: 0;}\r\n.mce-content-body .mce-offscreen-selection {position: absolute;left: -9999999999px;max-width: 1000000px;}.mce-content-body *[contentEditable=false] {cursor: default;}.mce-content-body *[contentEditable=true] {cursor: text;}\r\n</style><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"styles.css\" href=\"styles.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" type=\"text/css\" id=\"u0\" crossorigin=\"anonymous\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/skins/lightgray/content.min.css\"><link rel=\"stylesheet\" type=\"text/css\" id=\"u1\" crossorigin=\"anonymous\" href=\"//fonts.googleapis.com/css?family=Lato:300,300i,400,400i\"><link rel=\"stylesheet\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/codesample/css/prism.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/codesample/css/prism.css\"><link rel=\"stylesheet\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/a11ychecker/css/annotations.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/a11ychecker/css/annotations.css\"><link rel=\"stylesheet\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/mediaembed/content.min.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/mediaembed/content.min.css\"><link rel=\"stylesheet\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/linkchecker/content.min.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/linkchecker/content.min.css\"></head><body id=\"tinymce\" class=\"mce-content-body \" data-id=\"edit_content_block \" contenteditable=\"true\" spellcheck=\"false\"><div class=\"announcement-container\"><div class=\"announcement\"><h2 class=\"announcement-title\">Important Announcement</h2></div></div></body>', '03/21/2024', 1, 'No', 0, '2024-03-15 18:20:38', 0, '2024-03-17 00:42:39', 'Active'),
(4, 'Holi', '<head><style id=\"mceDefaultStyles\" type=\"text/css\">.mce-content-body div.mce-resizehandle {position: absolute;border: 1px solid black;box-sizing: content-box;background: #FFF;width: 7px;height: 7px;z-index: 10000}.mce-content-body .mce-resizehandle:hover {background: #000}.mce-content-body img[data-mce-selected],.mce-content-body hr[data-mce-selected] {outline: 1px solid black;resize: none}.mce-content-body .mce-clonedresizable {position: absolute;outline: 1px dashed black;opacity: .5;filter: alpha(opacity=50);z-index: 10000}.mce-content-body .mce-resize-helper {background: #555;background: rgba(0,0,0,0.75);border-radius: 3px;border: 1px;color: white;display: none;font-family: sans-serif;font-size: 12px;white-space: nowrap;line-height: 14px;margin: 5px 10px;padding: 5px;position: absolute;z-index: 10001}\r\n.mce-visual-caret {position: absolute;background-color: black;background-color: currentcolor;}.mce-visual-caret-hidden {display: none;}*[data-mce-caret] {position: absolute;left: -1000px;right: auto;top: 0;margin: 0;padding: 0;}\r\n.mce-content-body .mce-offscreen-selection {position: absolute;left: -9999999999px;max-width: 1000000px;}.mce-content-body *[contentEditable=false] {cursor: default;}.mce-content-body *[contentEditable=true] {cursor: text;}\r\n</style><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"><style id=\"fullpage_styles\">.mce-content-body div.mce-resizehandle {position: absolute;border: 1px solid black;box-sizing: content-box;background: #FFF;width: 7px;height: 7px;z-index: 10000}.mce-content-body .mce-resizehandle:hover {background: #000}.mce-content-body img[data-mce-selected],.mce-content-body hr[data-mce-selected] {outline: 1px solid black;resize: none}.mce-content-body .mce-clonedresizable {position: absolute;outline: 1px dashed black;opacity: .5;filter: alpha(opacity=50);z-index: 10000}.mce-content-body .mce-resize-helper {background: #555;background: rgba(0,0,0,0.75);border-radius: 3px;border: 1px;color: white;display: none;font-family: sans-serif;font-size: 12px;white-space: nowrap;line-height: 14px;margin: 5px 10px;padding: 5px;position: absolute;z-index: 10001}\n.mce-visual-caret {position: absolute;background-color: black;background-color: currentcolor;}.mce-visual-caret-hidden {display: none;}*[data-mce-caret] {position: absolute;left: -1000px;right: auto;top: 0;margin: 0;padding: 0;}\n.mce-content-body .mce-offscreen-selection {position: absolute;left: -9999999999px;max-width: 1000000px;}.mce-content-body *[contentEditable=false] {cursor: default;}.mce-content-body *[contentEditable=true] {cursor: text;}\n.mce-content-body div.mce-resizehandle {position: absolute;border: 1px solid black;box-sizing: content-box;background: #FFF;width: 7px;height: 7px;z-index: 10000}.mce-content-body .mce-resizehandle:hover {background: #000}.mce-content-body img[data-mce-selected],.mce-content-body hr[data-mce-selected] {outline: 1px solid black;resize: none}.mce-content-body .mce-clonedresizable {position: absolute;outline: 1px dashed black;opacity: .5;filter: alpha(opacity=50);z-index: 10000}.mce-content-body .mce-resize-helper {background: #555;background: rgba(0,0,0,0.75);border-radius: 3px;border: 1px;color: white;display: none;font-family: sans-serif;font-size: 12px;white-space: nowrap;line-height: 14px;margin: 5px 10px;padding: 5px;position: absolute;z-index: 10001}\n.mce-visual-caret {position: absolute;background-color: black;background-color: currentcolor;}.mce-visual-caret-hidden {display: none;}*[data-mce-caret] {position: absolute;left: -1000px;right: auto;top: 0;margin: 0;padding: 0;}\n.mce-content-body .mce-offscreen-selection {position: absolute;left: -9999999999px;max-width: 1000000px;}.mce-content-body *[contentEditable=false] {cursor: default;}.mce-content-body *[contentEditable=true] {cursor: text;}\n.mce-content-body div.mce-resizehandle {position: absolute;border: 1px solid black;box-sizing: content-box;background: #FFF;width: 7px;height: 7px;z-index: 10000}.mce-content-body .mce-resizehandle:hover {background: #000}.mce-content-body img[data-mce-selected],.mce-content-body hr[data-mce-selected] {outline: 1px solid black;resize: none}.mce-content-body .mce-clonedresizable {position: absolute;outline: 1px dashed black;opacity: .5;filter: alpha(opacity=50);z-index: 10000}.mce-content-body .mce-resize-helper {background: #555;background: rgba(0,0,0,0.75);border-radius: 3px;border: 1px;color: white;display: none;font-family: sans-serif;font-size: 12px;white-space: nowrap;line-height: 14px;margin: 5px 10px;padding: 5px;position: absolute;z-index: 10001}\n.mce-visual-caret {position: absolute;background-color: black;background-color: currentcolor;}.mce-visual-caret-hidden {display: none;}*[data-mce-caret] {position: absolute;left: -1000px;right: auto;top: 0;margin: 0;padding: 0;}\n.mce-content-body .mce-offscreen-selection {position: absolute;left: -9999999999px;max-width: 1000000px;}.mce-content-body *[contentEditable=false] {cursor: default;}.mce-content-body *[contentEditable=true] {cursor: text;}\n\n    body {\n      background-color: #f2f2f2;\n      font-family: Arial, sans-serif;\n    }\n\n    .announcement {\n      max-width: 600px;\n      margin: 50px auto;\n      background-color: #fff;\n      border-radius: 10px;\n      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);\n      padding: 30px;\n      text-align: center;\n    }\n\n    .announcement-title {\n      color: #ff6f61;\n      font-size: 36px;\n      margin-top: 0;\n    }\n\n    .announcement-content {\n      color: #555;\n      font-size: 18px;\n      line-height: 1.6;\n    }\n\n    .announcement-button {\n      background-color: #ff6f61;\n      color: #fff;\n      border: none;\n      padding: 10px 20px;\n      font-size: 18px;\n      border-radius: 5px;\n      cursor: pointer;\n      transition: background-color 0.3s ease;\n    }\n\n    .announcement-button:hover {\n      background-color: #ff5440;\n    }\n  </style><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/skins/lightgray/content.min.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/skins/lightgray/content.min.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"//fonts.googleapis.com/css?family=Lato:300,300i,400,400i\" href=\"//fonts.googleapis.com/css?family=Lato:300,300i,400,400i\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/codesample/css/prism.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/codesample/css/prism.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/a11ychecker/css/annotations.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/a11ychecker/css/annotations.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/mediaembed/content.min.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/mediaembed/content.min.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/linkchecker/content.min.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/linkchecker/content.min.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/skins/lightgray/content.min.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/skins/lightgray/content.min.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"//fonts.googleapis.com/css?family=Lato:300,300i,400,400i\" href=\"//fonts.googleapis.com/css?family=Lato:300,300i,400,400i\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/codesample/css/prism.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/codesample/css/prism.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/a11ychecker/css/annotations.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/a11ychecker/css/annotations.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/mediaembed/content.min.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/mediaembed/content.min.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/linkchecker/content.min.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/linkchecker/content.min.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/skins/lightgray/content.min.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/skins/lightgray/content.min.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"//fonts.googleapis.com/css?family=Lato:300,300i,400,400i\" href=\"//fonts.googleapis.com/css?family=Lato:300,300i,400,400i\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/codesample/css/prism.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/codesample/css/prism.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/a11ychecker/css/annotations.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/a11ychecker/css/annotations.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/mediaembed/content.min.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/mediaembed/content.min.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" text=\"text/css\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/linkchecker/content.min.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/linkchecker/content.min.css\" data-mce-fullpage=\"1\"><link rel=\"stylesheet\" type=\"text/css\" id=\"u0\" crossorigin=\"anonymous\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/skins/lightgray/content.min.css\"><link rel=\"stylesheet\" type=\"text/css\" id=\"u1\" crossorigin=\"anonymous\" href=\"//fonts.googleapis.com/css?family=Lato:300,300i,400,400i\"><link rel=\"stylesheet\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/codesample/css/prism.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/codesample/css/prism.css\"><link rel=\"stylesheet\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/a11ychecker/css/annotations.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/a11ychecker/css/annotations.css\"><link rel=\"stylesheet\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/mediaembed/content.min.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/mediaembed/content.min.css\"><link rel=\"stylesheet\" data-mce-href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/linkchecker/content.min.css\" href=\"https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4.9.11-104/plugins/linkchecker/content.min.css\"></head><body id=\"tinymce\" class=\"mce-content-body \" data-id=\"edit_content_block \" contenteditable=\"true\" spellcheck=\"false\"><div class=\"announcement\"><h1 class=\"announcement-title\">Happy <span class=\"mce-spellchecker-annotation mce-spellchecker-word mce-cram_94285619021711719306645\" aria-invalid=\"spelling\" data-mce-highlight-id=\"mce-cram_94285619021711719306645\" data-mce-bogus=\"1\" data-mce-annotation=\"Holi\" data-mce-lingo=\"en_us\">Holi</span>&nbsp;!</h1><p class=\"announcement-content\">Let\'s celebrate the festival of colors together!</p><p class=\"announcement-content\">Join us for a colorful and joyous celebration filled with music, dance, and fun activities.</p><p class=\"announcement-content\">Date: March 18, 2024</p><p class=\"announcement-content\">Time: 10:00 AM onwards</p><button class=\"announcement-button\">RSVP Now</button></div></body>', '03/31/2024', 1, 'No', 0, '2024-03-15 18:46:21', 0, '2024-03-29 19:05:09', 'Active'),
(5, 'Rakhi ', '<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n  <meta charset=\"UTF-8\">\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n  <title>Rakhi Celebration Announcement</title>\n  <style>\n    body {\n      background-color: #f7f7f7;\n      font-family: Arial, sans-serif;\n    }\n\n    .announcement {\n      max-width: 600px;\n      margin: 50px auto;\n      background-color: #fff;\n      border-radius: 10px;\n      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);\n      padding: 30px;\n      text-align: center;\n    }\n\n    .announcement-title {\n      color: #ff6961;\n      font-size: 36px;\n      margin-top: 0;\n    }\n\n    .announcement-content {\n      color: #555;\n      font-size: 18px;\n      line-height: 1.6;\n    }\n\n    .announcement-date {\n      color: #777;\n      font-style: italic;\n    }\n\n    .announcement-button {\n      background-color: #ff6961;\n      color: #fff;\n      border: none;\n      padding: 10px 20px;\n      font-size: 18px;\n      border-radius: 5px;\n      cursor: pointer;\n      transition: background-color 0.3s ease;\n    }\n\n    .announcement-button:hover {\n      background-color: #ff5440;\n    }\n  </style>\n</head>\n<body>\n<div class=\"announcement\">\n<h1 class=\"announcement-title\">Happy Rakhi!</h1>\n<p class=\"announcement-content\">Celebrate the bond of love and protection with your siblings this Rakhi.</p>\n<p class=\"announcement-content\">Join us for a special Rakhi celebration filled with joy, laughter, and memorable moments.</p>\n<p class=\"announcement-date\">Date: August 22, 2024</p>\n<button class=\"announcement-button\">RSVP Now</button></div>\n</body>\n</html>', '03/21/2024', 1, 'No', 0, '2024-03-15 18:51:42', NULL, NULL, 'Active'),
(6, 'Diwali ', '<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n  <meta charset=\"UTF-8\">\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n  <title>Diwali Celebration Announcement</title>\n  <style>\n    body {\n      margin: 0;\n      padding: 0;\n      background: linear-gradient(to right, #f6d365, #fda085);\n      font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;\n    }\n\n    .announcement-container {\n      width: 100%;\n      height: 100vh;\n      display: flex;\n      justify-content: center;\n      align-items: center;\n    }\n\n    .announcement {\n      background: #fff;\n      border-radius: 20px;\n      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);\n      padding: 40px;\n      text-align: center;\n    }\n\n    .announcement-title {\n      color: #f4b400;\n      font-size: 48px;\n      margin-top: 0;\n      margin-bottom: 20px;\n      font-family: \'Pacifico\', cursive;\n    }\n\n    .announcement-content {\n      color: #333;\n      font-size: 24px;\n      line-height: 1.6;\n      margin-bottom: 30px;\n    }\n\n    .announcement-date {\n      color: #777;\n      font-style: italic;\n      margin-bottom: 30px;\n    }\n\n    .announcement-button {\n      background-color: #f4b400;\n      color: #fff;\n      border: none;\n      padding: 15px 30px;\n      font-size: 24px;\n      border-radius: 30px;\n      cursor: pointer;\n      transition: background-color 0.3s ease;\n    }\n\n    .announcement-button:hover {\n      background-color: #f39800;\n    }\n  </style>\n</head>\n<body>\n<div class=\"announcement-container\">\n<div class=\"announcement\">\n<h1 class=\"announcement-title\">Happy Diwali!</h1>\n<p class=\"announcement-content\">Light up your life with joy and prosperity this Diwali.</p>\n<p class=\"announcement-content\">Join us for a grand Diwali celebration filled with lights, sweets, and fireworks.</p>\n<p class=\"announcement-date\">Date: November 4, 2024</p>\n<button class=\"announcement-button\">RSVP Now</button></div>\n</div>\n</body>\n</html>', '03/16/2024', 1, 'Yes', 0, '2024-03-15 18:53:29', 0, '2024-03-15 19:20:35', 'Active'),
(8, 'dfghj', '<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<p><img src=\"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhIVFhUVGBgVFxUXFRUYFxYWFRcWFxUZGBUYHSggGBolGxUVIjEiJSkrLi4uGB8zODMsNygtLisBCgoKDg0OGxAQGi0lICUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0rLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAQIDBAUGBwj/xABEEAABAwIDBQUFBQYFAwUBAAABAAIRAyEEEjEFQVFhcQYigZGhEzKxwfBCUmLR4QcUI3KC8RUzorLCQ5LSJFNzdOI0/8QAGgEAAgMBAQAAAAAAAAAAAAAAAwQAAQIFBv/EAC8RAAICAQQABAUDBAMAAAAAAAABAhEDBBIhMQUyQVETFCJhcUJSgTORsdEVI6H/2gAMAwEAAhEDEQA/AL4BGAjCNdU4YEYRJQChAwlAIkoBUQACUESUqNARoIwJMASToBqVC1yCVLw+Ac7XujzPiN3xR08LlAc+NWwN13AXO9WNKrb189Unm1NcQOvpvDrW7J/YTS2ZTGsu6mB5BSG0WDRrR4BP0MJmZnLwJsOsxdFh8PLnU3iHRLTJ3fHd6pZznLtjsYYYXtXRHq02ncPIH0KL9ypPHuhp/DaD8PRP4YD2dQkd5oOu6x+YKXReS0kZGtGjngXNgZ4f2VRbXTJkjF8NFTX2S4XY7NyNj56H0Ve9haYcCDwIhacu1MQQQHAGRe7XA72lLxGFDi5hAdlE318OBTENRJebkSy6OD5jwZVKhTsZs3L3mEkcN/gd/T4qA0puE1NWjnZcMsbqQcIQjQWgYphUaqxx18FISKiVzYlzI6ei1Uk1B1RXnGEOhzbaWUj94DrjToRru+uKddTBtCT7AT8vmkYwndHXnlhtcvYWzDve5oZM6RbvWOs8J4hWrNlinesXOMgxYMj7uYC91Wp2tjm/bc6AbCS4DoOhTGWCxcoQ0+SWpTjLpehe/wCJU/8A26fmPyQVF/iGH+9/pd+SCX+J9xz5WP7SoRgIBKC7R5IACUEAEYChYYCNElBUWCEYQQVEF06ZcQAJJ+vJTQG0z7Npl8S93Bv3Rwn4dQo+IxQw7ONR2g4deQ9T6UjMcW03vJlzjAJ1J3n1J8lz8+Zy4j0em8O8NUV8SfYvam2HPfDSQG7txIMi3grTZe0Q6x394cwdfWVkGvvHESp2FcQBGrT/AKXaeRBCWkqO24LbR0bZrvaMqUjvGYdf75fNN4bHRAeJDTIP2mn5jcqHZdeoRNwNM2kjf1TzsawAkGQNTIyiNZee6DymVNwhPTq3fTLypiqeapBkVG7gfeuPnKj4StSbEtqOMEEd0tM621WK2j25pMtSaKjuI9z/ALnC/gFmNo9q8VWs6qWt+4zuj0vKvcXHSNqjquM2vh6cuc8sluWH5AMukAAzbUWUTEdvMGHuc17zOXRhju3N+a4+6vJnUnUm5PijZVlVuYVaLH+pnUq3bnCmQPaCdO5pw8lAb2hwziSKmUEkw5jxEmdwIWCDk4wrUMsoO0Xl8OwZY7XZ0nDYplT3Htf/ACuBPkLp5czB/vwVxs/b9anZ5NRnBx7wH4X6+chMw1n7kcvP4E0rxSv7P/ZtJRyo2CxbKrc7DI04Fp4OG4/QT4TaakrRwJwljk4yVNCkEQRqyrYlIcwEQeadhEVieNTVMNgzyxO4kP8Achz9EFMQQPk8XsN/8nn9yvhGAjARp444AEaMI1RYSOEEaosCS/EtpguOujRz4+HzSis3jsVmM/VyflHkgZ5NRpep1fCdOsuXdLqP+fQXjMUXuLjqVCMkgfXNKDrIswaJ3n0SdHq7CaO+TuHdHgrHDbVo08rWDPUPvgwBDfelxsGjibSeJWP232hawZG3cdADc/8Ai38XkspW2jXLS01CJM5WgAcuZjcsOLkAy6qEPpfLOobX7XsYO85tV3CS2g3zg1fG3xWH2v2qNYzUqOfGjWiGN4ZW2asw5hJkyTxNz5oER1UUBWWrf6UWFXbTtzbc3fIBNDa1Q6Nb4yfmomUb7lKD4sFpRQvLU5H6kn/F6ouWtjoZ/wBymYfbQNnANPWx8SIHjCrA6yQG7vrl+SmxFR1ORPs1VDFZraHgbH9fBTKWZY3C4h1O3vN3t4c2nctRszEh4BDpB048wRxQpRo6mn1CycepbUmp+E1SUhrUNjyZI2ZjTQqB4nKbPb95v5jULdMIIBBkG4I0IOhHJc9e1bLs7UJw9OdwLfBrnAegCc0k3bicDx3DFxjlXd0WSNBGAnzzQSJKhEoUJhGjQUIQAjCARhbBhgIIIQqIBGhCOFCDWLMMefwu+BWSdrC1uO/y3/yn4LKVBDpS2ftHoPBXUZfkS90CVmNvbbMmlSu/7RPusHPi7gPNP9qtsGm3JTPfcDB+6Bq78v0WawtKB1uSd5PE70vFbmdDVapw+mPYVKlq4kkm5J1PMpqkMzi7y8P1T+KfDTHTzTWGNjygeSI0ro5e59jdRl0G4cnxUkARPFNvrHcstI1uY2MMpNPZ9ifuiT1MwPQpq9uH5arW7H2eZpsIuXBzuo77mno1gb1cUOUlXASEW3yZ7G7L9m8sOoufM/KE3V2ZGRw0eD5gn5hXXaMRXdzA/I/BObXoltLD7iKYcRwL4PxKzfCNOPZl8RhHNh0WdJB8SCD4gpzBONM5hOU+8Bu4OHMLabJ2YK2GyOFyHOngSRlPkfVZl9D2bywiN0cxY/XCFE74ZpXBqSNLs6rmF9Rw0I3EKwa1UWxgRbhp04LUYbCuqWY0nnuHU6BC2u6R2o54/D3ydIiGmTAAkmwA1JOi2uzsL7Om1nAX6m59SVF2XsoUu87vP47m9Pz+CtAn8GHZy+zzXimvWoahDyr/ANYYCUESCZOQGkFKRujd5/opZBtBGiUIQkaACMBbBBhGgjVEAjCJGoWhvENlrhxafgVj9p1hTY57jAaJJ5BbRcv7eVDajuL3T0YSPgD4wltQujteFZdin/cytaoaxNZ32jYcG6AeR8yU+QE1QENLfukjwmR8Qk5ihxVGpScnbI+NqXA4X87D5pOFdu6JrEC9zqZj4eHzCewbe91Q2+S0iVU4cB8k1h2AukzB4CSdwAG8mFJrNuBxP6/JW2yOztSoA890HT7xGlhutaTCxKQSELI+zWsNbNUcGsp7he7bta37xBuTx5LX7Hx1AEvzNmC1rQdBq654kATvid5R4PslQAAME7zM+DRoOvoNzlfstT/6Yy/XNCckMRgyixmHFfEEAgtzBhduMe8R4lx/pUrbdM1Xta0S6oQ1vME2J4DfybB0VphNhZDLgSAIa0XmdSfrqpeGwFQOdWLQHkZaehDGn3nc3GSOFze8qbi1Ac2LhgHPA91stHQNpNb/ALHeqz3avY5dWblF3z5gfEj5K5qmvSAZQExqSJkkkn1J80/hMRVc1zsRSLCMgZUjuh3tabgTH8seKqySjwa7s7sLCnD0z7GnmLAC8tBMkTJJ8UKlLKS2Ii0JHZfGB3tabfdpikI4G5I8i1Tsb3+99ptncx9l3yPhxTOkkc/xCPCIQCUiCUnjkhIwESOFCEh+HIAEtAjMTnaeMaGTaCI+8opS3GTJ1/IQPQJKqKaNNr0EoJSC1ZmyEAjhWFPZLyJtPCU9S2M4iSQDw/VU8kV6kWGb9CqCClYrCGm6D4HceiYIWlJMw4tcMTCVCJBQiAVzTtu9j67i3RsMcd2d0kgeR8Q5b7aeK9mwkCTuA1JJhrRzcbefJcjxlTNLzBJcZk6k3kNG7mhZWkhzSJ22QH07z58/1UevVDQeXE+QT9WoYlHs7Zz6veiRJcZEg7t+6xCVnKkdGEXJ0imDpPEneVdbHpC53xbqbfX6oVdlgGWiB5x+alYOnH19SUK7NqLT5LLYmy/bOLz7rYHUvcGfMq+21tg0f4dNrpNsobfhAdoPVT+z2FAwreZY8/0ua75DyVrj9lsq3cL8UKTsbxxpGA2gMWxrXvLQXkuDA32ha1sSXPfmO8WGt1e9jNtPqONKqIIEg3yuHEZrt6c5EQQrv/BwQ0Ek5dO8bTrfWNLcgncHsOkx7XhsOaSR3nalpaZk3sVfDVUXslGV3wWTG3TtZohICkGiSzPuBg8puFTRSKbaW0KVAZqjmtHMtHqSPLVWXZTbuExRNNr2OIBgSDMy02N5AndEOKxnaDYL6tQVHTngwWuMNvLQ3QxEaakSdUnAbHqUaYxLJa6kyuX5swJYM2UHeCZIFxGYXEQokkU7dqjQfsvxntWV63/uvlg/A06+oC1jXQSeV+dx/dY39k+GAY5wENyuDW6gB77RN/8Apb73WyxVUEyI7wBkGQenJH03bRz9bdKQw/64eSDfoIP3HlHl+kIBPrlHIfDFOeTqSd9/rkiQQVksJBGiVkCQRIKiGhwx3KSGpii9p0UhgskZ9nUguBrEUg4EEWP15qh2lhQwiND8Rr8lonMVHtimc07tAfiiYXzQDUxW26Kook4WpJCbOeZ3tZVc2m1w3OeT/MWQz4A+C5riaOUxwt47/Iyuw7Rwgqscw/aBHjBj1XKMdTLS7OO82QQdZGqDkXNnQ0s04bfuUG0a0d0an6Kv+zLy7DEAjM0+zIIvDnOLD0MuH9CyrpLpP1J/VT9mbT/dqrXQS2A17RqRYyB95pAI8RvSk1uQ/jltdmqxGGGZoce7IbniwkxIb8zNtyRtPZ7ab8reQ55jcz4D1VwMFSr0vaNecjgXNLYLOZgiRvlsggyEzhME5zTUfJ7vcnVwF8x5mBHLqgp0MtX0afYlMCk1katn0AI+vvBWFOdDqPXmmdlU5pt6NI/7QPkVYeyWQ0XSGAxONanMiMBaI5WR3m8K02XXptDm1Jh4g8ufUKsxGHDwRLgDrlcWnwc248E7gNnOcWhriGMMmSXEgXy5nGbmPBU2/Qz9NcgxNC5BvCRt7DhmysXlBLnMygAEk5ntEAcydAp1dku8UrtL3MGGTeo+nTA4972hB36Uzop9zM3caKXs5R/dsKyk0jOW5nkRAzToeuh3hpIsQndhYv2tFrtBmdA/CXEgeqr6tdzWYmoRlAaKbPx1HtjMTMmAZ/qHFWHZ3BmnRa12o1HTWecyEfTRe6xHWyise19lmdB4nzj8kAjRwugjjMARwggqICEkhKRKyCYQRoKyi0ZIA7hHO91LwtY6RZBmIaRe3JPtASU5e6OnCNdMclM16IcLgHkRKdSS4Ia46CtJ9lJj8CGjM3Qa+JsqwhaPaAOR0am3rdUVWiRqCJ4pzFK1yc7PBRlwRnhYzthsjOXVWibDOBwIs70PotuQmKtETMcuFkRqwWOTg7OEVMHkfDtBfrw+Sq4L3X139ZgrsHavsu2szNSaGvHvDQOHM8d88zK53iNjVKL++wtnpE9RbySssbTOnjyxmhrZeNq0hUYx38NzczmES1xkNFt02BjVoI4Q/W7TYl9Vjn1IawyA0ZWzpJH2rbjaCU37OGvjdknpFQfHKqmq74n5fmgyirGIyaR3Dsnig+n0AbHCM3yIWhhc27GYpzabHgzYNcOMSPMEepXQsLiQ8WS0uGOJ2h1wVVtjaD6IDmUX1RN8hbLRxgkE+Ctym3NVWX+TIHtFUefcNMcSCf8AbmPon9m9rHUazWPDnB9u61zmmbe8GwDbf81c4vZ7XaASlbN2aGHMfe3cpVc2NueFw4X8UXOGOZwVf2srtficLhyTDHe0dERmcDlHIhjaruhHFDaG2aWDp+1qnUwxs3e6JPRoEuc7cATwBynZlz8RUdiqpOYve8jgH9xo6ZGkAcIRF0c+T5NhtLZpdWZ91sOazdniG+AMHqOQTwAAgKZjXe4/eW+oP91DeLnr6bk/p19JydZJuQYRogEoBMCISCUG/X6I3gbjI46eiouhXsHRmtETqJgamJlNtYTol0mkkRqrbC4EBtyZ+CxKe3sLDHv6Kn2DuCJXf7iPvH0/JBY+ME+XZVUqkqZhq8a+ChhS8OwC58lqaVF42yaatk3KUKjU5TcCeiXuvQZ79RDaRSMRQzCCJUmU3iDYxuBPksqTbJOCSKGtT9mSNT0UR5lTv3V7tAVFqUyLEEJ2LOdJfYjP9Bc9Fif2gVR3G6amOYjXwd8VsMbiW02Oe7QSY3nLaB6LlPabajqtQucI0ETpc+uqmR/SE08W52VeGqs9oRUJDHtLHECcswWvA35HAHpPBU9fCvpktcNHCCLtMiZa7e0iCDvBCcqVIniCfikjEkjLPdabC0XmY4bzAtJnVJNc2dO/Q3PYGpmouZvDy0dCGun/AFFbimwgyCsL+zZ9qv8AM0+YP5LftCBNWxvE+CTSxke95qUyoDoVX5FHr93SR0QOQ9JlwVF2rtajhaL69Z0Nbo0e89x91jRvcfQAk2BWa2vtavSo1HtfBa1xEtBvFuq5ztHaFbEODq9RzyAQJgBs65WgACbaC8BGxwcgOWajwh3HbbxGOxDnPN6jX02UwBkY0sdlYHG7RMSftb+XT+yGHbSoMo03e0dGao4e7YaN/CI8YfvXMNlUWsaavvOPcYwSCXuhoHQknyW/7LbTFMezDgYAZmAgPf8AbIA+wIAHQrUrv8AoVXPbN9h6mZuU/ZJj/kPP5pk6pOHkMbuOvmXfCE44XTuLjn3OXqeePb/AAlgJICVCOJgQhGlNChYuha9wpYxzojfxUWURWHFPsKpOPRK/xF/BvkfzRKIjVfDj7GviS9xVA3KehHjQJBaADvjekOU75LrbwPtKepuhRA9LZJWHE3FkxtZOwotNqcBQ3H2CqXuPqLjqDXNJO4SnwUxia0RPH8/nCpXfBqW1rk532ypPY0sAJcS1sAEy55cYaBuAY8R+Ncv2rSc1xY9pa4ahwINxI+Mrr/7QahDG1m/ZqsPSW1Ms8pHquPbWxT3mXmS1uUOOpaCSAekm6I5S/gmOMUuChrvnqdeo1+R8UlrfL4pdKkST1+vropDaJJgX5BCoJZs/2cN7tZ3F7R5An/kuhU1lezGyv3akWEy4vzOjRrsrWuZ/SWkHmCtVQ0QZ9jePyocCZfTlPlAIVB74M32yblwlbkxx8hK5dQfIjeuo9sq7W0H5rgiI4zaFydzC09228b/XUo+LgUz8smUqxgAbpPO9vhK0GwdrMpPZ3XPII/hiA5wjfYimzfoSbbj3s9g8LUe45G3IZlmNahIaQDGYWPKYm0kdU2T2Vp4TCAtyurOl9WqeBFhmdfKBJuLyTCuVIzG2a/A121WtqNMh7Q4T9mSZbG6IA8FILb+HwI/Mqr7Mv/hu+63Qm1jp8h4K3amoPdE5uWGybEgI4TopOjNlOUb936pCLYHaJhKAQhBQlAQKCXSplxAH9gq6LoaQVl/h44n0QWd6N/CkQqr022omWlKlaSKsl02E6ealtpEDj0VfRcpVKoR+SHKwsGiUCizJtrzwS2UXOmItzWDf4FByj4wNjM4wBJJ3AAapbg5vvAjnu81nu0G22U6LyMzjYAaNkkAcz5K0iNN8UZv9pO22spjDhrs9QS6YADA7ukjXMS22mhvuXJcfiA643g/BaPtTtA1a9Z7znJ7jXSbZS0SBwhrhH4ljGgusFTb6DRjSHKNaBAFytB2cxBpZ4aDWqZBTmctOxcahb9otlrhmsCAYnKRR0KFw3iQCRrG/0lanYNIve+oWwXOEADRoaMo8oQpNoNCCZs8BRDKbWjQAcz4neVcYc2CrKZsFZUhACHLoZQ7mSio4qCbp4U3u91p+uqHJG0ZHt7TJokgSBHnmb8f+I4qm7F7Dw9d9RtZ7hUplrmNEAOFiCbXBNiBu4WWt7U4JwouL4gDMWggktbc28N65eMY+m9tRstc2wJNi3cMx+fWQiQuhfJW6y4q+zoYtzaZdlDiabS4nI17Q50bgQ72gtFyVotm7bdiHZXzke+4GtUt0Y38OgnhrbXK4Zj8fWc5ndBA9q+NNZAH3nRpzPKdpgtiexqUnAjuOpkHOCXEvDSO7oA0OtYfBRlRN92VwLnNJfYl14gXu8RbT+JwFz56SlhaebKAO7uiZ5lxklN7LDZc9ohj8racaFjBGbxJMHe0NKfw1Fklw70k63j9PzW1a4BOnyyr2ttVhf7IGzbE/ZJO7NpaY6yh/DDRAlxMGb25bh8Vd18JTeIc0HwVDtLB+xAIJLCbE6tPAn4H6Mto3GMJUmuSMSiRMMiU5SZJA4pyL4s5WSO2bj2O4fDl3IKVQwmV0zKXTAFgnc6FKTYaEF6jiCZ9ujQ6Ye0U+UcEj2SeNIoezKZsUoaa0hSaLCdSkFhTlKyzIiVD7WQpDNoU6bYIM74E9CSoprBUR2lVfnALgzMYEwIIFo42n+pDlFtDWBJyLvam1WOpkMdBdAiCDG/wgFYbbtL2jXM3lpI6i4nxDfJWNatGtrgeZjd1WS7bbbNIZKZhxFyNQDNgdxuriqQzNJdGC2jV3eHjP6qNQY1jYnqfrcmsXUMiNUrCUCajJvDmmN1iD9dVncCqy52Hsh9YlwaYDXEN3vMG3Q6c5Wt7Pshoh0cladm8Bllx5Dyv81c0MM0OJY0Am7hAgneQYsVnZfIwvp6ItF4Igwn3Tua7/ALT+SnMqboPp8ilzHFU4JG02yBhKV5cD5FT3VXGzBHMxYcQPz9VKZsuoW5y0jfB97y3J3ZmxzVcS+Q0evRDcVZd8WzGdoqOem4a6G9y4gi5nUwLfUZnDYek1j6kQ9rc9MwCM7XB0QbQQCPFb3b+G9nnzAgNk33NEyZXKqO1yS5j7NcXQ7c3NoHeG8eM7p2ZnXA3svHto03OYMudxfGkZrgRuAEW5Dgtj2Iw7sU9lV4/gU3Zng/8AVIEwb3AbfgRbRxjI9nuzlSvL6jT7Km7IBue9tjPFojx6a9K7Lv8AYtfS0bIdEb3Co087hrLKmzMFZ0baOOLSGMaHOdumIHPr8k9hqRYw3bmOpGg6Dl6qowjslJ2Jd71Q9wH7INmjmcoUnC1IoT99xPlA+IVmXDikTsA8FzoHDfM66805jsOH03MO8eR3HzTGzWw1zvLwUthJbdWYlxLgyOGbA8Tbgd6lUSQZCU6nlxDh9kjMfH/9SpYLBoExGf00K58f/Y3ffIYRFySXNRZgoZug86CTmCClFbiKaiP2u6LqJiqkNJGoTuxtoAtBMZgSDxM3HoY8FJS2jODSyywc0+nQ4XlPMfbiksLHS78Tt+omyA3xdWpKXQHJgnj7I+068UyPvd3z19PiqPC1hJHiPgfkp+0qsuA4fE/2CqsC282sD62/NWw+BcWHi6wMDmJ6Tdcr7QVC6rUnXO63ATA9F1LHYhhaRxtbnz3LknaHFNdVe5pnMQTp70DMBBuJ3rD6C5PQqaboJJ5xyC1Gwdjk03Vna5HFg4GJa4+KzlHCl3dAuV0/A4IikGjkyd14aPis/YkI3bL3Zzf4QI3/AB3j5Kww1InQdUzQwhZ3CLtJmN9ytNhKAZTDTYuLc066GJ8ytTddGovhNlfgdlVHE2gTqbcDproVf4DZ7Kd4k/ePy4BTGFpkggzrBm/9o8kT+AQpSbM72+Bqs5La4MHesT4k8gBclMtIJhsEjU/ZHjv6D0UinSAM6u3uOscBwHILJmT9DJdusJnpFxJaX93JI92DObgM2Ww9bRyDH1WUabqTWgOPtGOOveLYafCSI5rtHbMgAHeZEfhG88506LzxtQuzF5NyS4jidSev5q6N/pRosNt11JgYw5KbR52j4fNbPse11Ye3f9uSLzDQLeNyVzjY+w61cNqVWltLVoMgv4EcG3F+duK6r2Lwpp03DRofkaOrQ4xyhzR4LBuD9TS7W1p0hpTphx8e6PG0eKscQ3K1jB9kAeP6yq7EnPi8m7MwHoxoPxlWmH79QncO9/4/XRWy+kicGZWBvKPzT1PQKFinyYUxmgVgH0VG0afeB5Fp8Lj4uUZWG022PIh3nY/7j5KuARsfQrmX1WAuRZkIQDRN0ToEk26QMyCLPT4P82/kjWPiRD/KZfYr6l7KDh8KW1IDrEE87ECPXVP4nElhMDeOdgbqacdS9o3utNiJgciQOPu+hUlJMawYM8INwlVkcVC12Xc645Rqpec7phN4nKawizQ13nNPQeaj4zEloLGk963UGc1unxVRpdA5LJl+mXS9SDVfmJPEk/l6Kvo1S2RrPd8Zsp6rCO8R+IH1lFZvHwir7X419OgbZS7ugjibfAk+C5fVMEcr/kundsP4zPYggTDsxBMETECRunzWHHZvEsc176ftKentGHM2SYGYRmb1cAOaA5LoJPDPzVwWnYjZftagqVBYOgA/hAdPnA8V1Sls6WskQC6BbUNaXyPJVP7LtmgPcSAckm2gLzoJ3a+Q4LdbZ1p8hUP+iPmq/UiOW2DiM7F2aAA5xkmfIGAPT63SsPTBeIAgSefK/inMIf4Xp6p3CsgTxUk7bBx8o9UaDqL8RY+Yuo1ai38RPAucR5Ep5z46o6bYudVkg7RZlCVKKUFRRne2LmFgBH8T7N9BvnjpZcL2zTYMTlsW55c2NRAcBPAkkdI427V2xoGc32XCAeBA0+a4/wBotkYh1bNSp5pEWcwd4a2c4G/yW/QIotrglO7RPI7xnRrRAt/KBpwXSNjUXM9k157xMnrC5h2W7KYp+Ia7E0XU6bLkuyx5A97h4rqdGp/6pnAAvHSQh1QSEXTtD2FxH/qK9U6MLgOZc4gRzgeq0mzqRZTl3vO7x8dAsv2boe0InQuNR3P7voAtZiH2hQmXvaRy6XDmVZBU+BqZqnIfJXCsFk4dEPaAt1BCrsVSymxlW2NbLTyuql1aHDpPxHyWoypmHi+IqGTMTBjSUh5KdqVZnl/dN5t6MnuQvkxvE00yNmPD0KCb9ojWfhI387P2IG09T4fJRWf5jOjfhWRoIcjr4P6f8lkNR/K7/eFHxPvDofiggtR7Ql+7+RpV594oII77MQ8pUbY94eHxKt8J/wDxu/8Aif8AByCCSy9nYw/0kW/7NPdqf0f8lpNrat/lf8AggiLzI5Ob1/A/hv8AKH1xUpnujoggozEfKhoe8hi9yCCo0uyRR90dEooIKjJlu2n2Oh+S5xjP8xBBVk8h0vD/ADGwwH+QOiOl/nN/+u74tQQWIBNR2XXY/wB0/wArVc4jVBBEYhPzshbF989FeIkFAWTzCK/unoVncV77P5T/ALnoIK0SAl2h+tyNvu+HyRIIsOgWp8y/AtBBBbFz/9k=\" /></p>\n</body>\n</html>', '03/15/2024', 1, 'Yes', 0, '2024-03-16 08:51:51', 0, '2024-03-16 13:00:54', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `bank_master`
--

CREATE TABLE `bank_master` (
  `id` int NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `branch_address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ifsc_code` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_type` enum('Saving','Current','Domestic') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_holder_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `default_bank` enum('Yes','No') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'No',
  `entity_type` enum('Company','Employee') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `entity_id` int NOT NULL,
  `added_by` int DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_general_ci DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank_master`
--

INSERT INTO `bank_master` (`id`, `bank_name`, `branch_address`, `ifsc_code`, `account_type`, `account_no`, `account_holder_name`, `default_bank`, `entity_type`, `entity_id`, `added_by`, `added_on`, `updated_by`, `updated_on`, `status`) VALUES
(1, 'ICICI', 'Bhopal', 'IFSC123', 'Current', '23858235829', 'Salman Khan', 'No', 'Company', 1, 1, '2024-03-29 00:45:05', NULL, NULL, 'Active'),
(2, 'SBI', 'Bhopal', 'IFSC23454534', 'Domestic', '48164871264871', 'AROM2', 'Yes', 'Company', 1, 1, '2024-03-29 00:45:05', NULL, NULL, 'Active'),
(3, 'ICIC', 'Raisen', 'ICIC854', 'Saving', '741258633', '89526522', 'Yes', 'Employee', 2, 0, '2024-03-29 00:59:58', NULL, NULL, 'Active'),
(4, 'ICICI', 'Nagapur', 'IFSC123', 'Current', '39471928461928', 'Gaytri', 'Yes', 'Employee', 3, 0, '2024-03-29 18:39:47', NULL, NULL, 'Active'),
(5, 'ICICI', 'Kolhapur', 'IFSC3454124', 'Domestic', '2342342342365756', 'Aarbaj Mulla', 'Yes', 'Company', 2, 1, '2024-03-29 19:10:18', NULL, NULL, 'Active'),
(6, 'ICICI1', 'Kolhapur', 'IFSC1239078', 'Saving', '124124214124', 'Aarbaj Mulla', 'Yes', 'Employee', 4, 0, '2024-03-29 19:33:20', 1, '0000-00-00 00:00:00', 'Active'),
(7, 'icic', 'Kolhapur', 'IFSC', 'Saving', '237428342342', 'AROM', 'Yes', 'Employee', 1, 1, '2024-03-29 21:12:06', NULL, NULL, 'Active'),
(8, 'SBI', 'Indor', 'IFSC23456', 'Current', '9234987324', 'John', 'Yes', 'Employee', 5, 0, '2024-03-29 22:36:17', NULL, NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` int NOT NULL,
  `company_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company_code` varchar(255) NOT NULL,
  `company_logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state` int DEFAULT NULL,
  `country` int DEFAULT NULL,
  `zip_code` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_number_code` varchar(255) NOT NULL,
  `date_founded` date DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `pan_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_person` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gst_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tan_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `added_by` int DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company_name`, `company_code`, `company_logo`, `company_email`, `company_address`, `city`, `state`, `country`, `zip_code`, `website`, `contact_number_code`, `date_founded`, `description`, `pan_number`, `contact_number`, `contact_person`, `gst_number`, `tan_number`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(1, 'AROM', 'AROM123', 'lagos_tsch.jpeg', 'arom@gmail.com', 'Bhopla Chowk', 'Bhopla', 11, 105, '464551', 'www.arom.com', '+91', '2022-09-05', ' Arom Company', 'Pan1234567', '7225054741', 'Salman Khan', 'GST123455', 'TAN123', 1, '2024-03-29 00:45:05', NULL, NULL),
(2, 'TCS', 'TCS12', 'img21.jpeg', 'tcs@gmail.com', 'Kagal MIDC', 'Kolhapur', 12, 105, '416202', 'www.tcs.com', '+91', '2023-08-01', ' Comapny', 'PAN12345', '8485835691', 'Aarbaj Mulla', 'GST12345534', '', 1, '2024-03-29 19:10:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_variables`
--

CREATE TABLE `company_variables` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` enum('check_box','input','date') NOT NULL,
  `company_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_variables`
--

INSERT INTO `company_variables` (`id`, `name`, `title`, `value`, `description`, `type`, `company_id`) VALUES
(1, 'email_notification', 'Email Notification', 'No', 'This use for enable/disable notifications', 'check_box', 1),
(2, 'attendance_pin', 'Attendance Pin', '569178', 'This use for set attendance pin notifications', 'input', 1),
(3, 'birthday_wishes_notification', 'Birthday Wishes Notification', 'No', 'This use for enable/disable birthday wishes email notifications', 'check_box', 1),
(4, 'anniversary_wishes_notification', 'Anniversary Wishes Notification', 'No', 'This use for enable/disable anniversary wishes email notifications', 'check_box', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department_master`
--

CREATE TABLE `department_master` (
  `department_id` int NOT NULL,
  `departmen_name` varchar(255) NOT NULL,
  `department_code` varchar(255) NOT NULL,
  `company_id` int NOT NULL DEFAULT '0',
  `added_by` int DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department_master`
--

INSERT INTO `department_master` (`department_id`, `departmen_name`, `department_code`, `company_id`, `added_by`, `added_date`, `updated_by`, `updated_date`) VALUES
(1, 'Devlopment Unit', 'DEV', 1, 1, '2024-03-29 00:47:11', NULL, NULL),
(2, 'Sales Team', 'SALES', 1, 4, '2024-03-29 22:10:25', NULL, NULL),
(4, 'Sales Team', 'SALES', 2, 1, '2024-03-29 22:13:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designation_master`
--

CREATE TABLE `designation_master` (
  `id` int NOT NULL,
  `designation_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `department_id` int NOT NULL,
  `grads` enum('I','II','III') COLLATE utf8mb4_general_ci NOT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_general_ci DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation_master`
--

INSERT INTO `designation_master` (`id`, `designation_name`, `department_id`, `grads`, `created_on`, `created_by`, `updated_on`, `updated_by`, `status`) VALUES
(1, 'Senior Software Devloper', 1, 'I', '2024-03-29 00:48:55', 0, NULL, NULL, 'Active'),
(2, 'Senior Sales ', 4, 'I', '2024-03-29 22:20:55', 0, NULL, NULL, 'Active'),
(3, 'Junior Software Devloper', 1, 'I', '2024-04-01 19:30:18', 0, '2024-04-01 19:39:02', 0, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `employee_attendance`
--

CREATE TABLE `employee_attendance` (
  `attendance_id` int NOT NULL,
  `employee_id` int NOT NULL,
  `attendance_date` date NOT NULL,
  `attendance_in_time` datetime DEFAULT NULL,
  `attendance_out_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_attendance`
--

INSERT INTO `employee_attendance` (`attendance_id`, `employee_id`, `attendance_date`, `attendance_in_time`, `attendance_out_time`) VALUES
(1, 2, '2024-03-29', '2024-03-29 01:06:26', '2024-03-30 14:09:06'),
(2, 2, '2024-03-30', '2024-03-30 11:57:35', '2024-03-30 14:09:06'),
(3, 1, '2024-03-31', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, '2024-03-31', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 3, '2024-03-31', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 4, '2024-03-31', '2024-03-31 21:46:37', '2024-03-31 19:30:00'),
(7, 5, '2024-03-31', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE `employee_leave` (
  `leave_id` int NOT NULL,
  `employee_id` int NOT NULL,
  `leave_start_date` date NOT NULL,
  `leave_end_date` date NOT NULL,
  `leave_type` enum('half_day','full_day') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'full_day',
  `reason` varchar(255) NOT NULL,
  `approved_by` int DEFAULT '0',
  `status` enum('pending','reject','approve') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `added_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`leave_id`, `employee_id`, `leave_start_date`, `leave_end_date`, `leave_type`, `reason`, `approved_by`, `status`, `added_date`, `updated_date`) VALUES
(1, 1, '2024-03-29', '2024-03-30', 'full_day', 'Going home', 1, 'approve', '2024-03-29 01:00:53', '2024-03-29 01:01:17'),
(2, 2, '2024-03-29', '2024-03-30', 'full_day', '', 1, 'approve', '2024-03-29 01:04:38', '2024-03-29 01:05:20');

-- --------------------------------------------------------

--
-- Table structure for table `employee_master`
--

CREATE TABLE `employee_master` (
  `employee_id` int NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `employee_code` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','employee','manager','arom') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'employee',
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mobile_number` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `secondary_mobile_code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `secondary_mobile_number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` enum('Male','Female','Other') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marital_status` enum('Single','Married','Other') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Single',
  `country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_general_ci,
  `zipcode` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `employment_date` date DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `login_attempt_failed` int DEFAULT '0',
  `profile_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reporting_manager` int DEFAULT NULL,
  `employee_week_off` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `work_mobile_code` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `work_mobile_number` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `work_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `over_time_allow` enum('Yes','NO') COLLATE utf8mb4_general_ci NOT NULL,
  `education_degree` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `education_feild` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `education_college` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `education_pass_out_year` int NOT NULL,
  `aadhar_number` int NOT NULL,
  `pan_card_number` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `pf_number` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `uan_number` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `company_id` int NOT NULL,
  `status` enum('Active','Inactive','Pending','Block') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Active',
  `is_edit` enum('Yes','No') COLLATE utf8mb4_general_ci DEFAULT 'No',
  `edit_json` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `otp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `attendance_pin` int NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `sys_record_delete` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_master`
--

INSERT INTO `employee_master` (`employee_id`, `first_name`, `middle_name`, `last_name`, `employee_code`, `role`, `email`, `phone_code`, `mobile_number`, `secondary_mobile_code`, `secondary_mobile_number`, `dob`, `gender`, `marital_status`, `country`, `state`, `city`, `address`, `zipcode`, `department`, `designation`, `employment_date`, `password`, `login_attempt_failed`, `profile_image`, `reporting_manager`, `employee_week_off`, `work_mobile_code`, `work_mobile_number`, `work_email`, `over_time_allow`, `education_degree`, `education_feild`, `education_college`, `education_pass_out_year`, `aadhar_number`, `pan_card_number`, `pf_number`, `uan_number`, `company_id`, `status`, `is_edit`, `edit_json`, `otp`, `attendance_pin`, `created_by`, `created_on`, `updated_by`, `updated_on`, `sys_record_delete`) VALUES
(1, 'Niya', 'John', 'Dev', 'MDN-00001', 'arom', 'admin@gmail.com', '+91', '98765 43210', '', '', '2000-02-08', 'Male', 'Single', '105', '12', 'Nagpur', 'Vaishali Nagar Nagpur', '440015', '1', '1', '2024-02-01', '12bce374e7be15142e8172f668da00d8', 0, '06861059652e73a19e3d946ed4de09d5.jpeg', 1, 'Sunday', '+1', '8485835698', 'arom.work@gmail.com', 'Yes', 'B Tech', 'CSE', 'KIT', 2015, 2147483647, 'PAN123456', '', '', 0, 'Active', 'No', '', '', 568956, 0, '2024-02-26 14:43:47', 1, '2024-03-29 21:12:06', 0),
(2, 'Salman', '', 'Khan', 'MDN-00002', 'employee', 'salmankhan@yopmail.com', '+91', '7225054741', '+91', '', '2000-04-02', 'Male', 'Single', '105', '11', 'Bhopal', 'Bhopal Jinsi Chock', '464551', '1', '1', '2022-01-01', '836371a053d66d87beb0c5c8f604d419', 0, 'salmanbhai.jpeg', 1, 'Monday', '+91', '7225054741', 'salmankhan46113@outlook.com', 'NO', 'B.Tech', 'CS', 'TIT', 2022, 7422589, 'PAN8563', '', '', 1, 'Active', 'No', NULL, '', 569178, 1, '2024-03-29 00:59:58', NULL, NULL, 0),
(3, 'Gayatri', 'N', 'Headu', 'MDN-00003', 'manager', 'gayatri@gmail.com', '+91', '8381058482', '+91', '', '2000-07-18', 'Female', 'Single', '105', '12', 'Nagapur', 'Nagapur chowk', '416208', '1', '1', '2024-03-11', 'f925916e2754e5e03f75dd58a5733251', 0, 'user11.jpeg', 1, 'Sunday', '+91', '8381058482', 'gayatri.work@gmail.com', 'Yes', 'B Tech', 'ENTC', 'Raysoni', 2018, 147852963, 'PAN123', '', '', 1, 'Active', 'Yes', '{\"old_employe_data\":{\"employee_data\":{\"employee_id\":\"3\",\"first_name\":\"Gayatri\",\"middle_name\":\"N\",\"last_name\":\"Headu\",\"employee_code\":\"MDN-00003\",\"role\":\"manager\",\"email\":\"gayatri@gmail.com\",\"phone_code\":\"+91\",\"mobile_number\":\"8381058482\",\"secondary_mobile_code\":\"+91\",\"secondary_mobile_number\":\"\",\"dob\":\"2000-07-18\",\"gender\":\"Female\",\"marital_status\":\"Single\",\"country\":\"105\",\"state\":\"12\",\"city\":\"Nagapur\",\"address\":\"Nagapur chowk\",\"zipcode\":\"416208\",\"department\":\"1\",\"designation\":\"1\",\"employment_date\":\"2024-03-11\",\"password\":\"f925916e2754e5e03f75dd58a5733251\",\"login_attempt_failed\":\"0\",\"profile_image\":\"user11.jpeg\",\"reporting_manager\":\"1\",\"employee_week_off\":\"Sunday\",\"work_mobile_code\":\"+91\",\"work_mobile_number\":\"8381058482\",\"work_email\":\"gayatri.work@gmail.com\",\"over_time_allow\":\"Yes\",\"education_degree\":\"B Tech\",\"education_feild\":\"ENTC\",\"education_college\":\"Raysoni\",\"education_pass_out_year\":\"2018\",\"aadhar_number\":\"147852963\",\"pan_card_number\":\"PAN123\",\"pf_number\":\"\",\"uan_number\":\"\",\"company_id\":\"1\",\"status\":\"Active\",\"is_edit\":\"No\",\"otp\":\"\",\"attendance_pin\":\"569178\",\"created_by\":\"1\",\"created_on\":\"2024-03-29 18:39:47\",\"updated_by\":null,\"updated_on\":null,\"sys_record_delete\":\"0\"},\"bank_data\":[{\"id\":\"4\",\"bank_name\":\"ICICI\",\"branch_address\":\"Nagapur\",\"ifsc_code\":\"IFSC123\",\"account_type\":\"Current\",\"account_no\":\"39471928461928\",\"account_holder_name\":\"Gaytri\",\"default_bank\":\"Yes\",\"entity_type\":\"Employee\",\"entity_id\":\"3\",\"added_by\":\"0\",\"added_on\":\"2024-03-29 18:39:47\",\"updated_by\":null,\"updated_on\":null,\"status\":\"Active\"}]},\"new_employe_data\":{\"mode\":\"Update\",\"employee_id\":\"3\",\"first_name\":\"Gayatri1\",\"middle_name\":\"N\",\"last_name\":\"Headu\",\"email\":\"gayatri@gmail.com\",\"dob\":\"07\\/18\\/2000\",\"mobile_number\":\"83810 58482\",\"secondary_number\":\"\",\"gender\":\"Female\",\"marital_status\":\"Single\",\"profile_image_name\":\"user11.jpeg\",\"company\":\"1\",\"department\":\"1\",\"designation\":\"1\",\"employement_type\":\"manager\",\"manager\":\"1\",\"employement_date\":\"03\\/11\\/2024\",\"week_off\":\"Sunday\",\"overtime_allow\":\"Yes\",\"work_mobile_number\":\"83810 58482\",\"work_email\":\"gayatri.work@gmail.com\",\"country\":\"105\",\"state\":\"12\",\"city\":\"Nagapur\",\"address\":\"Nagapur chowk\",\"zipcode\":\"416208\",\"aadhar_number\":\"147852963\",\"pan_card_number\":\"PAN123\",\"pf_number\":\"\",\"uan_number\":\"\",\"degree_name\":\"B Tech\",\"education_field\":\"ENTC\",\"college_name\":\"Raysoni\",\"pass_out_year\":\"2018\",\"phone_code\":\"+91\",\"secondary_number_code\":\"+91\",\"work_mobile_number_code\":\"+91\",\"week_off_val\":\"Sunday\",\"deleted_bank\":[],\"bank_data\":[{\"bank_id\":\"4\",\"bank_name\":\"ICICI\",\"branch_address\":\"Nagapur\",\"ifsc_code\":\"IFSC123\",\"account_type\":\"Current\",\"account_number\":\"39471928461928\",\"account_holder_name\":\"Gaytri\",\"default_bank\":\"Yes\"}]}}', '', 569178, 1, '2024-03-29 18:39:47', 4, '2024-03-30 14:22:32', 0),
(4, 'Aarbaj1', 'A', 'Mulla', 'MDN-00004', 'admin', 'aarbaj10@yopmail.com', '+91', '84858 35691', '', '', '2000-03-21', 'Male', 'Single', '105', '12', 'Kolhapur', 'Kolhapur', '416202', '1', '1', '2024-03-19', 'f925916e2754e5e03f75dd58a5733251', 0, 'user27.jpeg', 1, 'Saturday', '+91', '84858 35691', 'aarbaj23@gmail.com', 'Yes', 'B Tech', 'ENTC', 'SIT', 2018, 2147483647, 'PAN12345', '', '', 1, 'Active', 'Yes', '{\"old_employe_data\":{\"employee_data\":{\"employee_id\":\"4\",\"first_name\":\"Aarbaj1\",\"middle_name\":\"A\",\"last_name\":\"Mulla\",\"employee_code\":\"MDN-00004\",\"role\":\"admin\",\"email\":\"aarbaj10@yopmail.com\",\"phone_code\":\"+91\",\"mobile_number\":\"84858 35691\",\"secondary_mobile_code\":\"\",\"secondary_mobile_number\":\"\",\"dob\":\"2000-03-21\",\"gender\":\"Male\",\"marital_status\":\"Single\",\"country\":\"105\",\"state\":\"12\",\"city\":\"Kolhapur\",\"address\":\"Kolhapur\",\"zipcode\":\"416202\",\"department\":\"1\",\"designation\":\"1\",\"employment_date\":\"2024-03-19\",\"password\":\"f925916e2754e5e03f75dd58a5733251\",\"login_attempt_failed\":\"0\",\"profile_image\":\"user27.jpeg\",\"reporting_manager\":\"1\",\"employee_week_off\":\"Saturday\",\"work_mobile_code\":\"+91\",\"work_mobile_number\":\"84858 35691\",\"work_email\":\"aarbaj23@gmail.com\",\"over_time_allow\":\"Yes\",\"education_degree\":\"B Tech\",\"education_feild\":\"ENTC\",\"education_college\":\"SIT\",\"education_pass_out_year\":\"2018\",\"aadhar_number\":\"2147483647\",\"pan_card_number\":\"PAN12345\",\"pf_number\":\"\",\"uan_number\":\"\",\"company_id\":\"1\",\"status\":\"Active\",\"is_edit\":\"No\",\"otp\":\"\",\"attendance_pin\":\"569178\",\"created_by\":\"1\",\"created_on\":\"2024-03-29 19:33:20\",\"updated_by\":\"1\",\"updated_on\":\"2024-03-30 14:03:53\",\"sys_record_delete\":\"0\"},\"bank_data\":[{\"id\":\"6\",\"bank_name\":\"ICICI1\",\"branch_address\":\"Kolhapur\",\"ifsc_code\":\"IFSC1239078\",\"account_type\":\"Saving\",\"account_no\":\"124124214124\",\"account_holder_name\":\"Aarbaj Mulla\",\"default_bank\":\"Yes\",\"entity_type\":\"Employee\",\"entity_id\":\"4\",\"added_by\":\"0\",\"added_on\":\"2024-03-29 19:33:20\",\"updated_by\":\"1\",\"updated_on\":\"0000-00-00 00:00:00\",\"status\":\"Active\"}]},\"new_employe_data\":{\"mode\":\"Update\",\"employee_id\":\"4\",\"first_name\":\"Aarbaj\",\"middle_name\":\"A\",\"last_name\":\"Mulla\",\"email\":\"aarbaj10@yopmail.com\",\"dob\":\"03\\/21\\/2000\",\"mobile_number\":\"84858 35691\",\"secondary_number\":\"\",\"gender\":\"Male\",\"marital_status\":\"Single\",\"profile_image_name\":\"user27.jpeg\",\"company\":\"1\",\"department\":\"1\",\"designation\":\"1\",\"employement_type\":\"admin\",\"manager\":\"1\",\"employement_date\":\"03\\/19\\/2024\",\"week_off\":\"Saturday\",\"overtime_allow\":\"Yes\",\"work_mobile_number\":\"84858 35691\",\"work_email\":\"aarbaj23@gmail.com\",\"country\":\"105\",\"state\":\"12\",\"city\":\"Kolhapur\",\"address\":\"Kolhapur\",\"zipcode\":\"416202\",\"aadhar_number\":\"2147483647\",\"pan_card_number\":\"PAN12345\",\"pf_number\":\"\",\"uan_number\":\"\",\"degree_name\":\"B Tech\",\"education_field\":\"ENTC\",\"college_name\":\"SIT\",\"pass_out_year\":\"2018\",\"phone_code\":\"+91\",\"secondary_number_code\":\"+1\",\"work_mobile_number_code\":\"+91\",\"week_off_val\":\"Saturday\",\"deleted_bank\":[],\"bank_data\":[{\"bank_id\":\"6\",\"bank_name\":\"ICICI\",\"branch_address\":\"Kolhapur\",\"ifsc_code\":\"IFSC1239078\",\"account_type\":\"Saving\",\"account_number\":\"124124214124\",\"account_holder_name\":\"Aarbaj Mulla\",\"default_bank\":\"Yes\"}]}}', '', 569178, 1, '2024-03-29 19:33:20', 1, '2024-03-30 14:04:39', 0),
(5, 'John', 'M', 'Broma', 'MDN-00005', 'admin', 'john1@yopmail.com', '+91', '8485835696', '+91', '', '2000-03-21', 'Male', 'Married', '105', '11', 'Indor', 'indor', '586956', '4', '2', '2024-03-04', 'f925916e2754e5e03f75dd58a5733251', 0, 'download_(2)1.jpeg', 1, 'Saturday', '+91', '8586895694', 'john.broma@gmail.com', 'NO', 'B Tech', 'MECH', 'GTAA', 2018, 2147483647, 'PAN34567', '', '', 2, 'Active', 'No', NULL, '', 569178, 1, '2024-03-29 22:36:17', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_shift`
--

CREATE TABLE `employee_shift` (
  `employee_shift_id` int NOT NULL,
  `group_title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shift_id` int DEFAULT NULL,
  `employee_ids` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `added_by` int DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_shift`
--

INSERT INTO `employee_shift` (`employee_shift_id`, `group_title`, `shift_id`, `employee_ids`, `start_date`, `end_date`, `added_by`, `added_on`, `updated_by`, `updated_on`, `status`) VALUES
(1, 'Group A', 1, '2,3', '2024-03-31', '2024-04-06', 0, '2024-03-30 14:29:47', 0, '2024-04-01 16:48:41', NULL),
(2, 'Group A1', 1, '2', '2024-04-01', '2024-04-15', 0, '2024-04-01 17:26:02', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_week_off`
--

CREATE TABLE `employee_week_off` (
  `week_off_id` int NOT NULL,
  `employee_id` int NOT NULL,
  `employee_week_off` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_week_off`
--

INSERT INTO `employee_week_off` (`week_off_id`, `employee_id`, `employee_week_off`, `month`, `added_date`) VALUES
(1, 2, 'Monday', 'March', '2024-03-29 00:59:58'),
(2, 3, 'Sunday', 'March', '2024-03-29 18:39:47'),
(3, 4, 'Saturday', 'March', '2024-03-29 19:33:20'),
(4, 5, 'Saturday', 'March', '2024-03-29 22:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `holiday_master`
--

CREATE TABLE `holiday_master` (
  `id` int NOT NULL,
  `holiday_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `holiday_date` date NOT NULL,
  `company_id` int NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_general_ci DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `holiday_master`
--

INSERT INTO `holiday_master` (`id`, `holiday_name`, `holiday_date`, `company_id`, `created_by`, `created_on`, `updated_by`, `updated_on`, `status`) VALUES
(1, 'Maha shivratri', '2024-03-15', 1, 0, '2024-03-14 15:36:46', 0, '2024-03-14 16:12:24', 'Active'),
(2, 'Independence Day', '2024-08-15', 2, 0, '2024-03-14 15:37:01', 1, '2024-03-29 18:55:23', 'Active'),
(3, 'Eid', '2024-04-09', 1, 0, '2024-03-14 15:38:01', 0, '2024-03-20 10:26:40', 'Active'),
(4, 'Independence Day', '2024-03-05', 2, 0, '2024-03-14 15:38:21', NULL, NULL, 'Active'),
(5, 'test1', '2024-03-19', 1, 0, '2024-03-20 10:26:52', NULL, NULL, 'Active'),
(7, 'Ganesh chaturti', '2024-06-14', 1, 0, '2024-03-29 18:54:38', NULL, NULL, 'Active'),
(8, 'Diwali', '2024-08-15', 1, 1, '2024-03-29 19:00:52', NULL, NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `shift_master`
--

CREATE TABLE `shift_master` (
  `id` int NOT NULL,
  `company_id` int DEFAULT NULL,
  `shift_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `department_id` int NOT NULL,
  `shift_type` enum('I','II','III') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `added_by` int DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shift_master`
--

INSERT INTO `shift_master` (`id`, `company_id`, `shift_name`, `department_id`, `shift_type`, `start_time`, `end_time`, `added_by`, `added_on`, `updated_by`, `updated_on`, `status`) VALUES
(1, 1, 'Morning Shift', 1, 'I', '1:45 PM', '4:45 PM', 0, '2024-03-29 00:52:04', 0, '2024-03-31 23:45:21', 'Active'),
(2, 1, 'Afternoon Shift', 2, 'I', '8:00 AM', '9:30 AM', 0, '2024-03-31 22:57:07', 0, '2024-03-31 23:47:50', 'Active'),
(3, 1, 'Morning Shift	', 1, 'II', '1:00 AM', '1:30 AM', 0, '2024-03-31 22:58:41', 0, '2024-03-31 23:47:56', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `iStateId` int UNSIGNED NOT NULL,
  `vState` varchar(255) NOT NULL,
  `vStateCode` varchar(20) NOT NULL,
  `iCountryId` int DEFAULT NULL,
  `vCountryCode` varchar(3) DEFAULT NULL,
  `eStatus` enum('Active','Inactive') DEFAULT NULL,
  `iSysRecDeleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`iStateId`, `vState`, `vStateCode`, `iCountryId`, `vCountryCode`, `eStatus`, `iSysRecDeleted`) VALUES
(1, 'ANDHRA PRADESH', 'AP', 99, 'IN', 'Active', 0),
(2, 'ASSAM', 'AS', 99, 'IN', 'Active', 0),
(3, 'ARUNACHAL PRADESH', 'AR', 99, 'IN', 'Active', 0),
(4, 'BIHAR', 'BR', 99, 'IN', 'Active', 0),
(5, 'GUJRAT', 'GJ', 99, 'IN', 'Active', 0),
(6, 'HARYANA', 'HR', 99, 'IN', 'Active', 0),
(7, 'HIMACHAL PRADESH', 'HP', 99, 'IN', 'Active', 0),
(8, 'JAMMU & KASHMIR', 'JK', 99, 'IN', 'Active', 0),
(9, 'KARNATAKA', 'KA', 99, 'IN', 'Active', 0),
(10, 'KERALA', 'KL', 99, 'IN', 'Active', 0),
(11, 'MADHYA PRADESH', 'MP', 99, 'IN', 'Active', 0),
(12, 'MAHARASHTRA', 'MH', 99, 'IN', 'Active', 0),
(13, 'MANIPUR', 'MN', 99, 'IN', 'Active', 0),
(14, 'MEGHALAYA', 'ML', 99, 'IN', 'Active', 0),
(15, 'MIZORAM', 'MZ', 99, 'IN', 'Active', 0),
(16, 'NAGALAND', 'NL', 99, 'IN', 'Active', 0),
(17, 'ORISSA', 'OR', 99, 'IN', 'Active', 0),
(18, 'PUNJAB', 'PB', 99, 'IN', 'Active', 0),
(19, 'RAJASTHAN', 'RJ', 99, 'IN', 'Active', 0),
(20, 'SIKKIM', 'SK', 99, 'IN', 'Active', 0),
(21, 'TAMIL NADU', 'TN', 99, 'IN', 'Active', 0),
(22, 'TRIPURA', 'TR', 99, 'IN', 'Active', 0),
(23, 'UTTAR PRADESH', 'UP', 99, 'IN', 'Active', 0),
(24, 'WEST BENGAL', 'WB', 99, 'IN', 'Active', 0),
(25, 'DELHI', 'DL', 99, 'IN', 'Active', 0),
(26, 'GOA', 'GA', 99, 'IN', 'Active', 0),
(27, 'PONDICHERRY', 'PY', 99, 'IN', 'Active', 0),
(28, 'LAKSHDWEEP', 'LD', 99, 'IN', 'Active', 0),
(29, 'DAMAN & DIU', 'DD', 99, 'IN', 'Active', 0),
(30, 'DADRA & NAGAR', 'DN', 99, 'IN', 'Active', 0),
(31, 'CHANDIGARH', 'CH', 99, 'IN', 'Active', 0),
(32, 'ANDAMAN & NICOBAR', 'AN', 99, 'IN', 'Active', 0),
(33, 'UTTARANCHAL', 'UT', 99, 'IN', 'Active', 0),
(34, 'JHARKHAND', 'JH', 99, 'IN', 'Active', 0),
(35, 'CHATTISGARH', 'CG', 99, 'IN', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country_master`
--

CREATE TABLE `tbl_country_master` (
  `id` int NOT NULL,
  `country_code` char(2) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `currency_code` char(3) DEFAULT NULL,
  `telephone_prefix` varchar(10) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_country_master`
--

INSERT INTO `tbl_country_master` (`id`, `country_code`, `country_name`, `currency_code`, `telephone_prefix`, `status`) VALUES
(1, 'AD', 'Andorra', 'EUR', '+376', 'Active'),
(2, 'AE', 'United Arab Emirates', 'AED', '+971', 'Active'),
(3, 'AF', 'Afghanistan', 'AFN', '+93', 'Active'),
(4, 'AG', 'Antigua and Barbuda', 'XCD', '+1-268', 'Active'),
(5, 'AI', 'Anguilla', 'XCD', '+1-264', 'Active'),
(6, 'AL', 'Albania', 'ALL', '+355', 'Active'),
(7, 'AM', 'Armenia', 'AMD', '+374', 'Active'),
(8, 'AO', 'Angola', 'AOA', '+244', 'Active'),
(9, 'AQ', 'Antarctica', '', '+672', 'Active'),
(10, 'AR', 'Argentina', 'ARS', '+54', 'Active'),
(11, 'AS', 'American Samoa', 'USD', '+1-684', 'Active'),
(12, 'AT', 'Austria', 'EUR', '+43', 'Active'),
(13, 'AU', 'Australia', 'AUD', '+61', 'Active'),
(14, 'AW', 'Aruba', 'AWG', '+297', 'Active'),
(15, 'AX', 'Åland Islands', 'EUR', '+358', 'Active'),
(16, 'AZ', 'Azerbaijan', 'AZN', '+994', 'Active'),
(17, 'BA', 'Bosnia and Herzegovina', 'BAM', '+387', 'Active'),
(18, 'BB', 'Barbados', 'BBD', '+1-246', 'Active'),
(19, 'BD', 'Bangladesh', 'BDT', '+880', 'Active'),
(20, 'BE', 'Belgium', 'EUR', '+32', 'Active'),
(21, 'BF', 'Burkina Faso', 'XOF', '+226', 'Active'),
(22, 'BG', 'Bulgaria', 'BGN', '+359', 'Active'),
(23, 'BH', 'Bahrain', 'BHD', '+973', 'Active'),
(24, 'BI', 'Burundi', 'BIF', '+257', 'Active'),
(25, 'BJ', 'Benin', 'XOF', '+229', 'Active'),
(26, 'BL', 'Saint Barthélemy', 'EUR', '+590', 'Active'),
(27, 'BM', 'Bermuda', 'BMD', '+1-441', 'Active'),
(28, 'BN', 'Brunei Darussalam', 'BND', '+673', 'Active'),
(29, 'BO', 'Bolivia', 'BOB', '+591', 'Active'),
(30, 'BQ', 'Bonaire, Sint Eustatius and Saba', 'USD', '+599', 'Active'),
(31, 'BR', 'Brazil', 'BRL', '+55', 'Active'),
(32, 'BS', 'Bahamas', 'BSD', '+1-242', 'Active'),
(33, 'BT', 'Bhutan', 'BTN', '+975', 'Active'),
(34, 'BV', 'Bouvet Island', 'NOK', '+47', 'Active'),
(35, 'BW', 'Botswana', 'BWP', '+267', 'Active'),
(36, 'BY', 'Belarus', 'BYR', '+375', 'Active'),
(37, 'BZ', 'Belize', 'BZD', '+501', 'Active'),
(38, 'CA', 'Canada', 'CAD', '+1', 'Active'),
(39, 'CC', 'Cocos [Keeling] Islands', 'AUD', '+61', 'Active'),
(40, 'CD', 'Democratic Republic of the Congo', 'COD', '+243', 'Active'),
(41, 'CF', 'Central African Republic', 'XAF', '+236', 'Active'),
(42, 'CG', 'Republic of the Congo', 'XAF', '+242', 'Active'),
(43, 'CH', 'Switzerland', 'CHF', '+41	', 'Active'),
(44, 'CI', 'Ivory Coast', 'XOF', '+225', 'Active'),
(45, 'CK', 'Cook Islands', 'NZD', '+682', 'Active'),
(46, 'CL', 'Chile', 'CLP', '+56', 'Active'),
(47, 'CM', 'Cameroon', 'XAF', '+237', 'Active'),
(48, 'CN', 'China', 'CNY', '+86', 'Active'),
(49, 'CO', 'Colombia', 'COP', '+57', 'Active'),
(50, 'CR', 'Costa Rica', 'CRC', '+506', 'Active'),
(51, 'CU', 'Cuba', 'CUP', '+53', 'Active'),
(52, 'CV', 'Cape Verde', 'CVE', '+238', 'Active'),
(53, 'CW', 'Curaçao', 'ANG', '+599', 'Active'),
(54, 'CX', 'Christmas Island', 'AUD', '+61', 'Active'),
(55, 'CY', 'Cyprus', 'EUR', '+357', 'Active'),
(56, 'CZ', 'Czech Republic', 'CZK', '+420', 'Active'),
(57, 'DE', 'Germany', 'EUR', '+49', 'Active'),
(58, 'DJ', 'Djibouti', 'DJF', '+253', 'Active'),
(59, 'DK', 'Denmark', 'DKK', '+45', 'Active'),
(60, 'DM', 'Dominica', 'XCD', '+1-767', 'Active'),
(61, 'DO', 'Dominican Republic', 'DOP', '+1-809', 'Active'),
(62, 'DZ', 'Algeria', 'DZD', '+213', 'Active'),
(63, 'EC', 'Ecuador', 'USD', '+593', 'Active'),
(64, 'EE', 'Estonia', 'EUR', '+372', 'Active'),
(65, 'EG', 'Egypt', 'EGP', '+20', 'Active'),
(66, 'EH', 'Western Sahara', 'MAD', '+212', 'Active'),
(67, 'ER', 'Eritrea', 'ERN', '+291', 'Active'),
(68, 'ES', 'Spain', 'EUR', '+34', 'Active'),
(69, 'ET', 'Ethiopia', 'ETB', '+251', 'Active'),
(70, 'FI', 'Finland', 'EUR', '+358', 'Active'),
(71, 'FJ', 'Fiji', 'FJD', '+679', 'Active'),
(72, 'FK', 'Falkland Islands', 'FKP', '+500', 'Active'),
(73, 'FM', 'Micronesia', 'USD', '+691', 'Active'),
(74, 'FO', 'Faroe Islands', 'DKK', '+298', 'Active'),
(75, 'FR', 'France', 'EUR', '+33', 'Active'),
(76, 'GA', 'Gabon', 'XAF', '+241', 'Active'),
(77, 'GB', 'United Kingdom of Great Britain and Northern Ireland', 'GBP', '+44', 'Active'),
(78, 'GD', 'Grenada', 'XCD', '+1-473', 'Active'),
(79, 'GE', 'Georgia', 'GEL', '+995', 'Active'),
(80, 'GF', 'French Guiana', 'EUR', '+594', 'Active'),
(81, 'GG', 'Guernsey', 'GBP', '+44-1481', 'Active'),
(82, 'GH', 'Ghana', 'GHS', '+233', 'Active'),
(83, 'GI', 'Gibraltar', 'GIP', '+350', 'Active'),
(84, 'GL', 'Greenland', 'DKK', '+299', 'Active'),
(85, 'GM', 'Gambia', 'GMD', '+220', 'Active'),
(86, 'GN', 'Guinea', 'GNF', '+224', 'Active'),
(87, 'GP', 'Guadeloupe', 'EUR', '+590', 'Active'),
(88, 'GQ', 'Equatorial Guinea', 'XAF', '+240', 'Active'),
(89, 'GR', 'Greece', 'EUR', '+30', 'Active'),
(90, 'GS', 'South Georgia and the South Sandwich Islands', 'GBP', '+500', 'Active'),
(91, 'GT', 'Guatemala', 'GTQ', '+502', 'Active'),
(92, 'GU', 'Guam', 'USD', '+1-671', 'Active'),
(93, 'GW', 'Guinea-Bissau', 'XOF', '+245', 'Active'),
(94, 'GY', 'Guyana', 'GYD', '+592', 'Active'),
(95, 'HK', 'Hong Kong', 'HKD', '+852', 'Active'),
(96, 'HM', 'Heard Island and McDonald Islands', 'AUD', '+672', 'Active'),
(97, 'HN', 'Honduras', 'HNL', '+504', 'Active'),
(98, 'HR', 'Croatia', 'HRK', '+385', 'Active'),
(99, 'HT', 'Haiti', 'HTG', '+509', 'Active'),
(100, 'HU', 'Hungary', 'HUF', '+36', 'Active'),
(101, 'ID', 'Indonesia', 'IDR', '+62', 'Active'),
(102, 'IE', 'Ireland', 'EUR', '+353', 'Active'),
(103, 'IL', 'Israel', 'ILS', '+972', 'Active'),
(104, 'IM', 'Isle of Man', 'GBP', '+44-1624', 'Active'),
(105, 'IN', 'India', 'INR', '+91', 'Active'),
(106, 'IO', 'British Indian Ocean Territory', 'USD', '+246', 'Active'),
(107, 'IQ', 'Iraq', 'IQD', '+964', 'Active'),
(108, 'IR', 'Iran', 'IRR', '+98', 'Active'),
(109, 'IS', 'Iceland', 'ISK', '+354', 'Active'),
(110, 'IT', 'Italy', 'EUR', '+39', 'Active'),
(111, 'JE', 'Jersey', 'GBP', '+44-1534', 'Active'),
(112, 'JM', 'Jamaica', 'JMD', '+1-876', 'Active'),
(113, 'JO', 'Jordan', 'JOD', '+962', 'Active'),
(114, 'JP', 'Japan', 'JPY', '+81', 'Active'),
(115, 'KE', 'Kenya', 'KES', '+254', 'Active'),
(116, 'KG', 'Kyrgyzstan', 'KGS', '+996', 'Active'),
(117, 'KH', 'Cambodia', 'KHR', '+855', 'Active'),
(118, 'KI', 'Kiribati', 'AUD', '+686', 'Active'),
(119, 'KM', 'Comoros', 'KMF', '+269', 'Active'),
(120, 'KN', 'Saint Kitts and Nevis', 'XCD', '+1-869', 'Active'),
(121, 'KP', 'North Korea', 'KPW', '+850', 'Active'),
(122, 'KR', 'South Korea', 'KRW', '+82', 'Active'),
(123, 'KW', 'Kuwait', 'KWD', '+965', 'Active'),
(124, 'KY', 'Cayman Islands', 'KYD', '+1-345', 'Active'),
(125, 'KZ', 'Kazakhstan', 'KZT', '+7', 'Active'),
(126, 'LA', 'Laos', 'LAK', '+856', 'Active'),
(127, 'LB', 'Lebanon', 'LBP', '+961', 'Active'),
(128, 'LC', 'Saint Lucia', 'XCD', '+1-758', 'Active'),
(129, 'LI', 'Liechtenstein', 'CHF', '+423', 'Active'),
(130, 'LK', 'Sri Lanka', 'LKR', '+94', 'Active'),
(131, 'LR', 'Liberia', 'LRD', '+231', 'Active'),
(132, 'LS', 'Lesotho', 'LSL', '+266', 'Active'),
(133, 'LT', 'Lithuania', 'EUR', '+370', 'Active'),
(134, 'LU', 'Luxembourg', 'EUR', '+352', 'Active'),
(135, 'LV', 'Latvia', 'EUR', '+371', 'Active'),
(136, 'LY', 'Libya', 'LYD', '+218', 'Active'),
(137, 'MA', 'Morocco', 'MAD', '+212', 'Active'),
(138, 'MC', 'Monaco', 'EUR', '+377', 'Active'),
(139, 'MD', 'Moldova', 'MDL', '+373', 'Active'),
(140, 'ME', 'Montenegro', 'EUR', '+382', 'Active'),
(141, 'MF', 'Saint Martin', 'EUR', '+590', 'Active'),
(142, 'MG', 'Madagascar', 'MGA', '+261', 'Active'),
(143, 'MH', 'Marshall Islands', 'USD', '+692', 'Active'),
(144, 'MK', 'North Macedonia', 'MKD', '+389', 'Active'),
(145, 'ML', 'Mali', 'XOF', '+223', 'Active'),
(146, 'MM', 'Myanmar [Burma]', 'MMK', '+95', 'Active'),
(147, 'MN', 'Mongolia', 'MNT', '+976', 'Active'),
(148, 'MO', 'Macao', 'MOP', '+853', 'Active'),
(149, 'MP', 'Northern Mariana Islands', 'USD', '+1-670', 'Active'),
(150, 'MQ', 'Martinique', 'EUR', '+596', 'Active'),
(151, 'MR', 'Mauritania', 'MRO', '+222', 'Active'),
(152, 'MS', 'Montserrat', 'XCD', '+1-664', 'Active'),
(153, 'MT', 'Malta', 'EUR', '+356', 'Active'),
(154, 'MU', 'Mauritius', 'MUR', '+230', 'Active'),
(155, 'MV', 'Maldives', 'MVR', '+960', 'Active'),
(156, 'MW', 'Malawi', 'MWK', '+265', 'Active'),
(157, 'MX', 'Mexico', 'MXN', '+52', 'Active'),
(158, 'MY', 'Malaysia', 'MYR', '+60', 'Active'),
(159, 'MZ', 'Mozambique', 'MZN', '+258', 'Active'),
(160, 'NA', 'Namibia', 'NAD', '+264', 'Active'),
(161, 'NC', 'New Caledonia', 'XPF', '+687', 'Active'),
(162, 'NE', 'Niger', 'XOF', '+227', 'Active'),
(163, 'NF', 'Norfolk Island', 'AUD', '+672', 'Active'),
(164, 'NG', 'Nigeria', 'NGN', '+234', 'Active'),
(165, 'NI', 'Nicaragua', 'NIO', '+505', 'Active'),
(166, 'NL', 'Netherlands', 'EUR', '+31', 'Active'),
(167, 'NO', 'Norway', 'NOK', '+47', 'Active'),
(168, 'NP', 'Nepal', 'NPR', '+977', 'Active'),
(169, 'NR', 'Nauru', 'AUD', '+674', 'Active'),
(170, 'NU', 'Niue', 'NZD', '+683', 'Active'),
(171, 'NZ', 'New Zealand', 'NZD', '+64', 'Active'),
(172, 'OM', 'Oman', 'OMR', '+968', 'Active'),
(173, 'PA', 'Panama', 'PAB', '+507', 'Active'),
(174, 'PE', 'Peru', 'PEN', '+51', 'Active'),
(175, 'PF', 'French Polynesia', 'XPF', '+689', 'Active'),
(176, 'PG', 'Papua New Guinea', 'PGK', '+675', 'Active'),
(177, 'PH', 'Philippines', 'PHP', '+63', 'Active'),
(178, 'PK', 'Pakistan', 'PKR', '+92', 'Active'),
(179, 'PL', 'Poland', 'PLN', '+48', 'Active'),
(180, 'PM', 'Saint Pierre and Miquelon', 'EUR', '+508', 'Active'),
(181, 'PN', 'Pitcairn Islands', 'NZD', '+64', 'Active'),
(182, 'PR', 'Puerto Rico', 'USD', '+1-787', 'Active'),
(183, 'PS', 'Palestine', 'ILS', '+970', 'Active'),
(184, 'PT', 'Portugal', 'EUR', '+351', 'Active'),
(185, 'PW', 'Palau', 'USD', '+680', 'Active'),
(186, 'PY', 'Paraguay', 'PYG', '+595', 'Active'),
(187, 'QA', 'Qatar', 'QAR', '+974', 'Active'),
(188, 'RE', 'Réunion', 'EUR', '+262', 'Active'),
(189, 'RO', 'Romania', 'RON', '+40', 'Active'),
(190, 'RS', 'Serbia', 'RSD', '+381', 'Active'),
(191, 'RU', 'Russia', 'RUB', '+7', 'Active'),
(192, 'RW', 'Rwanda', 'RWF', '+250', 'Active'),
(193, 'SA', 'Saudi Arabia', 'SAR', '+966', 'Active'),
(194, 'SB', 'Solomon Islands', 'SBD', '+677', 'Active'),
(195, 'SC', 'Seychelles', 'SCR', '+248', 'Active'),
(196, 'SD', 'Sudan', 'SDG', '+249', 'Active'),
(197, 'SE', 'Sweden', 'SEK', '+46', 'Active'),
(198, 'SG', 'Singapore', 'SGD', '+65', 'Active'),
(199, 'SH', 'Saint Helena', 'SHP', '+290', 'Active'),
(200, 'SI', 'Slovenia', 'EUR', '+386', 'Active'),
(201, 'SJ', 'Svalbard and Jan Mayen', 'NOK', '+47', 'Active'),
(202, 'SK', 'Slovakia', 'EUR', '+421', 'Active'),
(203, 'SL', 'Sierra Leone', 'SLL', '+232', 'Active'),
(204, 'SM', 'San Marino', 'EUR', '+378', 'Active'),
(205, 'SN', 'Senegal', 'XOF', '+221', 'Active'),
(206, 'SO', 'Somalia', 'SOS', '+252', 'Active'),
(207, 'SR', 'Suriname', 'SRD', '+597', 'Active'),
(208, 'SS', 'South Sudan', 'SSP', '+211', 'Active'),
(209, 'ST', 'São Tomé and Príncipe', 'STD', '+239', 'Active'),
(210, 'SV', 'El Salvador', 'USD', '+503', 'Active'),
(211, 'SX', 'Sint Maarten', 'ANG', '+1-721', 'Active'),
(212, 'SY', 'Syria', 'SYP', '+963', 'Active'),
(213, 'SZ', 'Eswatini', 'SZL', '+268', 'Active'),
(214, 'TC', 'Turks and Caicos Islands', 'USD', '+1-649', 'Active'),
(215, 'TD', 'Chad', 'XAF', '+235', 'Active'),
(216, 'TF', 'French Southern Territories', 'EUR', '+262', 'Active'),
(217, 'TG', 'Togo', 'XOF', '+228', 'Active'),
(218, 'TH', 'Thailand', 'THB', '+66', 'Active'),
(219, 'TJ', 'Tajikistan', 'TJS', '+992', 'Active'),
(220, 'TK', 'Tokelau', 'NZD', '+690', 'Active'),
(221, 'TL', 'East Timor', 'USD', '+670', 'Active'),
(222, 'TM', 'Turkmenistan', 'TMT', '+993', 'Active'),
(223, 'TN', 'Tunisia', 'TND', '+216', 'Active'),
(224, 'TO', 'Tonga', 'TOP', '+676', 'Active'),
(225, 'TR', 'Turkey', 'TRY', '+90', 'Active'),
(226, 'TT', 'Trinidad and Tobago', 'TTD', '+1-868', 'Active'),
(227, 'TV', 'Tuvalu', 'AUD', '+688', 'Active'),
(228, 'TW', 'Taiwan', 'TWD', '+886', 'Active'),
(229, 'TZ', 'Tanzania', 'TZS', '+255', 'Active'),
(230, 'UA', 'Ukraine', 'UAH', '+380', 'Active'),
(231, 'UG', 'Uganda', 'UGX', '+256', 'Active'),
(232, 'UM', 'U.S. Minor Outlying Islands', 'USD', '+1', 'Active'),
(233, 'US', 'United States', 'USD', '+1', 'Active'),
(234, 'UY', 'Uruguay', 'UYU', '+598', 'Active'),
(235, 'UZ', 'Uzbekistan', 'UZS', '+998', 'Active'),
(236, 'VA', 'Vatican City', 'EUR', '+379', 'Active'),
(237, 'VC', 'Saint Vincent and the Grenadines', 'XCD', '+1-784', 'Active'),
(238, 'VE', 'Venezuela', 'VEF', '+58', 'Active'),
(239, 'VG', 'British Virgin Islands', 'USD', '+1-284', 'Active'),
(240, 'VI', 'U.S. Virgin Islands', 'USD', '+1-340', 'Active'),
(241, 'VN', 'Vietnam', 'VND', '+84', 'Active'),
(242, 'VU', 'Vanuatu', 'VUV', '+678', 'Active'),
(243, 'WF', 'Wallis and Futuna', 'XPF', '+681', 'Active'),
(244, 'WS', 'Samoa', 'WST', '+685', 'Active'),
(245, 'XK', 'Kosovo', 'EUR', '+383', 'Active'),
(246, 'YE', 'Yemen', 'YER', '+967', 'Active'),
(247, 'YT', 'Mayotte', 'EUR', '+262', 'Active'),
(248, 'ZA', 'South Africa', 'ZAR', '+27', 'Active'),
(249, 'ZM', 'Zambia', 'ZMW', '+260', 'Active'),
(250, 'ZW', 'Zimbabwe', 'ZWL', '+263', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement_master`
--
ALTER TABLE `announcement_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_master`
--
ALTER TABLE `bank_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_variables`
--
ALTER TABLE `company_variables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_master`
--
ALTER TABLE `department_master`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `designation_master`
--
ALTER TABLE `designation_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_attendance`
--
ALTER TABLE `employee_attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `employee_master`
--
ALTER TABLE `employee_master`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employee_shift`
--
ALTER TABLE `employee_shift`
  ADD PRIMARY KEY (`employee_shift_id`);

--
-- Indexes for table `employee_week_off`
--
ALTER TABLE `employee_week_off`
  ADD PRIMARY KEY (`week_off_id`);

--
-- Indexes for table `holiday_master`
--
ALTER TABLE `holiday_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shift_master`
--
ALTER TABLE `shift_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`iStateId`),
  ADD KEY `mod_state_iCountryId_index` (`iCountryId`);

--
-- Indexes for table `tbl_country_master`
--
ALTER TABLE `tbl_country_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement_master`
--
ALTER TABLE `announcement_master`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bank_master`
--
ALTER TABLE `bank_master`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_variables`
--
ALTER TABLE `company_variables`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department_master`
--
ALTER TABLE `department_master`
  MODIFY `department_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designation_master`
--
ALTER TABLE `designation_master`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_attendance`
--
ALTER TABLE `employee_attendance`
  MODIFY `attendance_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee_leave`
--
ALTER TABLE `employee_leave`
  MODIFY `leave_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_master`
--
ALTER TABLE `employee_master`
  MODIFY `employee_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee_shift`
--
ALTER TABLE `employee_shift`
  MODIFY `employee_shift_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_week_off`
--
ALTER TABLE `employee_week_off`
  MODIFY `week_off_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `holiday_master`
--
ALTER TABLE `holiday_master`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shift_master`
--
ALTER TABLE `shift_master`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state_master`
--
ALTER TABLE `state_master`
  MODIFY `iStateId` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
