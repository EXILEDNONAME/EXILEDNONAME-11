/**
 * @license Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
/**
 * @module table/tableproperties
 */
import { Plugin } from 'ckeditor5/src/core';
import TablePropertiesEditing from './tableproperties/tablepropertiesediting';
import TablePropertiesUI from './tableproperties/tablepropertiesui';
/**
 * The table properties feature. Enables support for setting properties of tables (size, border, background, etc.).
 *
 * Read more in the {@glink features/tables/tables-styling Table and cell styling tools} section.
 * See also the {@link module:table/tablecellproperties~TableCellProperties} plugin.
 *
 * This is a "glue" plugin that loads the
 * {@link module:table/tableproperties/tablepropertiesediting~TablePropertiesEditing table properties editing feature} and
 * the {@link module:table/tableproperties/tablepropertiesui~TablePropertiesUI table properties UI feature}.
 */
export default class TableProperties extends Plugin {
    /**
     * @inheritDoc
     */
    static get pluginName(): "TableProperties";
    /**
     * @inheritDoc
     */
    static get requires(): readonly [typeof TablePropertiesEditing, typeof TablePropertiesUI];
}
