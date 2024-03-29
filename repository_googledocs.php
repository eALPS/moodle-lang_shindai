<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'repository_googledocs', language 'ja', branch 'MOODLE_23_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'クライアントID';
$string['configplugin'] = 'Google Docsプラグインを設定する';
$string['googledocs:view'] = 'Google Docsリポジトリを表示する';
$string['oauth2upgrade_message_content'] = 'Moodle 2.3へのアップグレードの一環として、Google Docsリポジトリプラグインは無効にされました。プラグインを再度有効にするには、クライアントIDおよび秘密鍵を取得するため、ドキュメンテーション「 {$a->docsurl} 」に記述されているように、あなたのサイトをGoogleに登録する必要があります。クライアントIDおよび秘密鍵はすべてのGoogle DocsおよびPicasaプラグイン設定に使用することができます。';
$string['oauth2upgrade_message_small'] = 'Google OAuth 2.0に記載されている設定が必要なため、このプラグインは無効にされます。';
$string['oauth2upgrade_message_subject'] = 'Google Docsリポジトリプラグインに関する重要情報';
$string['oauthinfo'] = '<p>このプラグインを使用するには、ドキュメンテーション「<a href="{$a->docsurl}">Google OAuth 2.0セットアップ</a>」に記載されているようにあなたのサイトをGoogleに登録する必要があります。</p><p>登録処理の一部として、あなたは次のURIを「公式リダイレクトURI」として入力する必要があります:</p><p>{$a->callbackurl}</p>登録後、すべてのGoogle DocsおよびPicasaプラグインに使用することのできるクライアントIDおよび秘密鍵が提供されます。</p>';
$string['pluginname'] = 'Google Docs';
$string['secret'] = 'シークレット';
