<?php if (!defined('PmWiki')) exit();
/*
	Code copyright 2009 David Gilbert http://solidgone.org/
	You can redistribute and/or modify this file under the terms of the GNU General Public License as published
	by the Free Software Foundation; either version 2 of the License, or	(at your option) any later version.

	Images are ImagesSilk icon set 1.3, by Mark James, http://www.famfamfam.com/lab/icons/silk/, and are
	licensed under a Creative Commons Attribution 2.5 License. [ http://creativecommons.org/licenses/by/2.5/ ]
*/
$RecipeInfo['EditToolbar']['Version'] = '2009-05-27';
global $GUIButtons, $GUIButtonDirUrlFmt;
SDV($GUIButtonDirUrlFmt,'$FarmPubDirUrl/edittoolbar');
SDV($et_Include_H1,false);
SDVA($GUIButtons, array(
'h1' => ($et_Include_H1
	?array(10, '\\n!! ', '\\n', '$[Heading]','$GUIButtonDirUrlFmt/text_heading_1.png"$[Heading Level 1]"')
	:array()),
'h2'			=> array(20, '\\n!! ', '\\n', '$[Heading]','$GUIButtonDirUrlFmt/text_heading_2.png"$[Heading Level 2]"'),
'h3'			=> array(30, '\\n!!! ', '\\n', '$[Subheading]','$GUIButtonDirUrlFmt/text_heading_3.png"$[Subheading Level 3]"'),
'separator1'=> array(40, '', '', '', '$GUIButtonDirUrlFmt/separator.png'),
'strong'		=> array(50, "'''", "'''", '$[Bold]','$GUIButtonDirUrlFmt/text_bold.png"$[Bold]"','$[ak_strong]'),
'em'			=> array(60, "''", "''", '$[Italic]','$GUIButtonDirUrlFmt/text_italic.png"$[Italic]"','$[ak_em]'),
'strike'		=> array(70, "{-", "-}", '$[Strikethrough]', '$GUIButtonDirUrlFmt/text_strikethrough.png"$[Strikethrough]"'),
'sup'			=> array(80, "'^", "^'", '$[Superscript]', '$GUIButtonDirUrlFmt/text_superscript.png"$[Superscript]"'),
'sub'			=> array(90, "'_", "_'", '$[Subscript]', '$GUIButtonDirUrlFmt/text_subscript.png"$[Subscript]"'),
'big'			=> array(100, "'+", "+'", '$[Big text]', '$GUIButtonDirUrlFmt/text_big.png"$[Big text]"'),
'small'		=> array(110, "'-", "-'", '$[Small text]', '$GUIButtonDirUrlFmt/text_small.png"$[Small text]"'),

'separator2'=> array(120, '', '', '', '$GUIButtonDirUrlFmt/separator.png'),
'ol'			=> array(130, '\\n# ', '\\n', '$[Ordered list]', '$GUIButtonDirUrlFmt/text_list_numbers.png"$[Ordered (numbered) list]"'),
'ul'			=> array(140, '\\n* ', '\\n', '$[Unordered list]', '$GUIButtonDirUrlFmt/text_list_bullets.png"$[Unordered (bullet) list]"'),
'hr'			=> array(150, '\\n----\\n', '', '', '$GUIButtonDirUrlFmt/text_horizontalrule.png"$[Horizontal rule]"'),
'table'		=> array(160,
	'(:table border=1 width=100%:)\\n(:cell:)\\n\\n(:cell:)\\n\\n(:cell:)\\n\\n(:cellnr:)\\n\\n(:cell:)\\n\\n(:cell:)\\n\\n(:tableend:)', '', '',
	'$GUIButtonDirUrlFmt/table_add.png"$[Table]"'),

'separator3'=> array(170, '', '', '', '$GUIButtonDirUrlFmt/separator.png'),
'center'		=> array(180, '%25center%25', '', '', '$GUIButtonDirUrlFmt/text_align_center.png"$[Center]"'),
'right'		=> array(190, '%25right%25', '', '', '$GUIButtonDirUrlFmt/text_align_right.png"$[Right justified]"'),
'indent'		=> array(200, '\\n->', '\\n', '$[Indented text]', '$GUIButtonDirUrlFmt/text_indent.png"$[Indented text]"'),
'outdent'	=> array(210, '\\n-<', '\\n', '$[Hanging indent]', '$GUIButtonDirUrlFmt/text_indent_remove.png"$[Hanging indent]"'),

'separator4'=> array(220, '', '', '', '$GUIButtonDirUrlFmt/separator.png'),
'pagelink'	=> array(230, '[[', ']]', '$[Page link]', '$GUIButtonDirUrlFmt/house_link.png"$[Link to internal page]"'),
'extlink'	=> array(240, '[[', ']]', 'http:// | $[link text]', '$GUIButtonDirUrlFmt/world_link.png"$[Link to external page]"'),
'attach'		=> array(250, 'Attach:', '', 'file.ext | $[link text]', '$GUIButtonDirUrlFmt/photo_link.png"$[Attach a file or image]"'),
'thumb'		=> array(260, '\%thumb\%[[Attach:', ' | Attach:image.jpg&quot;description&quot;]]', 'image.jpg', '$GUIButtonDirUrlFmt/photos.png"$[Attach an image as a thumbnail]"'),

'separator5'=> array(270, '', '', '', '$GUIButtonDirUrlFmt/separator.png'),
'author'		=> array(280, '~~~', '', '', '$GUIButtonDirUrlFmt/text_signature.png"$[Add author name]"'),
'authordate'=> array(290, '~\'\'~~~~\'\' ', '', '', '$GUIButtonDirUrlFmt/time_add.png"$[Add author name and date]"')
));
