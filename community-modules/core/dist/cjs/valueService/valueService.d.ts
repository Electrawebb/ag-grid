// Type definitions for @ag-grid-community/core v24.1.0
// Project: http://www.ag-grid.com/
// Definitions by: Niall Crosby <https://github.com/ag-grid/>
import { RowNode } from "../entities/rowNode";
import { Column } from "../entities/column";
import { BeanStub } from "../context/beanStub";
export declare class ValueService extends BeanStub {
    private gridOptionsWrapper;
    private expressionService;
    private columnController;
    private valueCache;
    private cellExpressions;
    private initialised;
    init(): void;
    getValue(column: Column, rowNode?: RowNode | null, forFilter?: boolean, ignoreAggData?: boolean): any;
    setValue(rowNode: RowNode, colKey: string | Column, newValue: any, eventSource?: string): void;
    private setValueUsingField;
    private executeFilterValueGetter;
    private executeValueGetter;
    private getValueCallback;
    getKeyForNode(col: Column, rowNode: RowNode): any;
}
