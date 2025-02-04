<?php

namespace Pac\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'subvention' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.Pac.Model.map
 */
class SubventionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Pac.Model.map.SubventionTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('subvention');
        $this->setPhpName('Subvention');
        $this->setClassname('Pac\\Model\\Subvention');
        $this->setPackage('Pac.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('company_id', 'CompanyId', 'INTEGER', 'company', 'id', false, null, null);
        $this->addColumn('year', 'Year', 'INTEGER', false, null, null);
        $this->addColumn('amount', 'Amount', 'DOUBLE', false, null, null);
        $this->addColumn('growth_amount', 'GrowthAmount', 'DOUBLE', false, null, null);
        $this->addColumn('growth_percent', 'GrowthPercent', 'DOUBLE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Company', 'Pac\\Model\\Company', RelationMap::MANY_TO_ONE, array('company_id' => 'id', ), 'CASCADE', null);
    } // buildRelations()

} // SubventionTableMap
