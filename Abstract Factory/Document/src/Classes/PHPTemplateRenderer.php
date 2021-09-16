<?php


namespace AbstractFactoryPattern\Classes;


use AbstractFactoryPattern\Interfaces\TemplateRenderer;

/**
 * Date: 2021-09-16
 * Class PHPTemplateRenderer
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class PHPTemplateRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        extract($arguments);

        ob_start();
        eval(' ?>' . $templateString . '<?php ');
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }
}