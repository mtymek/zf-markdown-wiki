ZF Markdown Wiki
================

Simple Markdown Wiki engine based on Zend Framework 2.

Usage
-----

1. Clone project:

    git clone --recursive git@github.com:mtymek/zf-markdown-wiki.git zf-markdown-wiki

2. Put your .md files in data/markdown directory
3. Access wiki by opening following URL in your browser:

    http://yourdomain/zf-markdown-wiki/public/wiki/Home


This application will map URL part after /wiki/ into data/markdown directory. You can easily link between
local pages:

    [Some Page](wiki/Reference/Some_Page)