export interface ReferenceData {
    statuses: Record<string, string>;
    positions: Record<string, string>;
    contractTypes: Record<string, string>;
}

export interface ReferenceDataWithExpirations extends ReferenceData {
    expireContract?: number[];
}
