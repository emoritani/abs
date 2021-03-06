<?php

class ToolsMenu
{
  const NAME = [
    'ファイル編集',
    'トランク設定',
    '拠点間接続設定',
    '内線ヒント生成',
    '電話機設定ファイル',
    'バックアップ',
    'リストア' ];

  const DESC = [
    '設定ファイル類の編集を行います',
    '必要な項目を入力するだけでトランク設定ファイルを生成します',
    '拠点間接続を使用する場合の情報を設定します',
    'BLFで内線状態を確認するためのヒントを生成します',
    '電話機の設定ファイルを生成します(機種限定)',
    'ABSの情報と設定ファイルのバックアップを行います',
    'バックアップファイルからの復元を行います' ];

  const FILE = [
    'file-edit',
    'addon/trunk-generator',
    'addon/intra-config',
    'hint-generator',
    'addon/prov-generator',
    'addon/backup-page',
    'addon/restore-page' ];  
}

?>
