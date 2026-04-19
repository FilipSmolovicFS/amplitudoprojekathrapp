import type {ContractType} from "@/types/contract/contract-type.ts";
import type {Document} from "@/types/contract/document.ts";

export interface Contract {
    id: number;
    started_at: string;
    ended_at: string;
    contract_type_id: string;
    document: Document;
    contract_type: ContractType;
}
