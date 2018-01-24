<?php
 
echo "<page backtop=\"10mm\" backbottom=\"10mm\" backleft=\"20mm\" backright=\"20mm\">\n    <page_header>\n        <table style=\"width: 100%; border: solid 1px black;\">\n            <tr>\n                <td style=\"text-align: left;    width: 33%\">html2pdf</td>\n                <td style=\"text-align: center;    width: 34%\">Test d'header</td>\n                <td style=\"text-align: right;    width: 33%\">";
echo date('d/m/Y');
echo "</td>\n            </tr>\n        </table>\n    </page_header>\n    <page_footer>\n        <table style=\"width: 100%; border: solid 1px black;\">\n            <tr>\n                <td style=\"text-align: left;    width: 50%\">html2pdf.fr</td>\n                <td style=\"text-align: right;    width: 50%\">page [[page_cu]]/[[page_nb]]</td>\n            </tr>\n        </table>\n    </page_footer>\n    <span style=\"font-size: 20px; font-weight: bold\">Démonstration des retour à la ligne automatique, ainsi que des sauts de page automatique</span><br>\n    <br>\n    <br>\n    <table style=\"width: 80%;border: solid 1px #5544DD; border-collapse: collapse\" align=\"center\">\n        <thead>\n            <tr>\n                <th style=\"width: 30%; text-align: left; border: solid 1px #337722; background: #CCFFCC\">Header 1</th>\n                <th style=\"width: 30%; text-align: left; border: solid 1px #337722; background: #CCFFCC\">Header 2</th>\n            </tr>\n        </thead>\n        <tbody>\n";

for ($k = 0; $k < 13; $k++) {
	echo "            <tr>\n                <td style=\"width: 30%; text-align: left; border: solid 1px #55DD44\">\n                    test de texte assez long pour engendrer des retours à la ligne automatique...\n                    a b c d e f g h i j k l m n o p q r s t u v w x y z\n                    a b c d e f g h i j k l m n o p q r s t u v w x y z\n                </td>\n                <td style=\"width: 70%; text-align: left; border: solid 1px #55DD44\">\n                    test de texte assez long pour engendrer des retours à la ligne automatique...\n                    a b c d e f g h i j k l m n o p q r s t u v w x y z\n                    a b c d e f g h i j k l m n o p q r s t u v w x y z\n\n                </td>\n            </tr>\n";
}

echo "        </tbody>\n        <tfoot>\n            <tr>\n                <th style=\"width: 30%; text-align: left; border: solid 1px #337722; background: #CCFFCC\">Footer 1</th>\n                <th style=\"width: 30%; text-align: left; border: solid 1px #337722; background: #CCFFCC\">Footer 2</th>\n            </tr>\n        </tfoot>\n    </table>\n    <br>\n    Ca marche !!!<br>\n    refaisons un test : <br>\n    <table style=\"width: 80%;border: solid 1px #5544DD\">\n";

for ($k = 0; $k < 12; $k++) {
	echo "        <tr>\n            <td style=\"width: 30%; text-align: left; border: solid 1px #55DD44\">\n                test de texte assez long pour engendrer des retours à la ligne automatique...\n                a b c d e f g h i j k l m n o p q r s t u v w x y z\n                a b c d e f g h i j k l m n o p q r s t u v w x y z\n            </td>\n            <td style=\"width: 70%; text-align: left; border: solid 1px #55DD44\">\n                test de texte assez long pour engendrer des retours à la ligne automatique...\n                a b c d e f g h i j k l m n o p q r s t u v w x y z\n                a b c d e f g h i j k l m n o p q r s t u v w x y z\n\n            </td>\n        </tr>\n";
}

echo "    </table>\n    <br>\n    Ca marche toujours !<br>\n    De plus, vous pouvez faire des sauts de page manuellement en utilisant les balises &lt;page&gt; &lt;/page&gt;, comme ici par exemple :\n</page>\n<page pageset=\"old\">\n    Nouvelle page !!!!\n</page>";

?>
