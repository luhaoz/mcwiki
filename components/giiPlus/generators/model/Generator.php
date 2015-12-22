<?php
namespace components\giiPlus\generators\model;

use Yii;
use yii\gii\CodeFile;

class Generator extends \yii\gii\generators\model\Generator
{

    public function generate()
    {
        $files = [];
        $relations = $this->generateRelations();
        $db = $this->getDbConnection();
        foreach ($this->getTableNames() as $tableName) {
            // model :
            $modelClassName = $this->generateClassName($tableName);
            $queryClassName = ($this->generateQuery) ? $this->generateQueryClassName($modelClassName) : false;
            $tableSchema = $db->getTableSchema($tableName);
            
            $baseModelConfig = [
                'tableName' => $tableName,
                'className' => 'Base'.ucfirst($modelClassName),
                'baseClassName' => $this->baseClass,
                'fileName' => 'base'.ucfirst($modelClassName). '.php',
                'queryClassName' => $queryClassName,
                'tableSchema' => $tableSchema,
                'labels' => $this->generateLabels($tableSchema),
                'rules' => $this->generateRules($tableSchema),
                'relations' => isset($relations[$tableName]) ? $relations[$tableName] : [],
                'namespace' => $this->ns.'\baseModel'
            ];
            $files[] = new CodeFile(Yii::getAlias('@' . str_replace('\\', '/', $this->ns)) . '/baseModel/' . $baseModelConfig['fileName'], $this->render('baseModel.php', $baseModelConfig));
            
            
            // baseModel
            $modelConfig = [
                'tableName' => $tableName,
                'className' => $modelClassName,
                'baseClassName' => $this->ns.'\baseModel\Base'.ucfirst($modelClassName),
                'fileName' => $modelClassName . '.php',
                'queryClassName' => $queryClassName,
                'tableSchema' => $tableSchema,
                'labels' => $this->generateLabels($tableSchema),
                'rules' => $this->generateRules($tableSchema),
                'relations' => isset($relations[$tableName]) ? $relations[$tableName] : [],
                'namespace' => $this->ns
            ];
            $files[] = new CodeFile(Yii::getAlias('@' . str_replace('\\', '/', $this->ns)) . '/' . $modelConfig['fileName'], $this->render('model.php', $modelConfig));
            
           
            // query :
            if ($queryClassName) {
                $params = [
                    'className' => $queryClassName,
                    'modelClassName' => $modelClassName
                ];
                $files[] = new CodeFile(Yii::getAlias('@' . str_replace('\\', '/', $this->queryNs)) . '/' . $queryClassName . '.php', $this->render('query.php', $params));
            }
        }
        
        return $files;
    }

    public function formView()
    {
        return '@yii/gii/generators/model/form.php';
    }

    public function defaultTemplate()
    {
        return '@app/components/giiPlus/generators/model/default';
    }
}
