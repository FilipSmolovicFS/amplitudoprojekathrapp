export interface Paginator<T>{
    data: T[];
    per_page: number;
    currentPage: number;
    path: string;
    query: any[];
    fragment?: any;
    pageName: string;
    escapeWhenCastingToString: boolean;
    onEachSide: number;
    options: any[];
    total: number;
    lastPage: number;
    links: [
        {
            active: boolean;
            label: string;
            page?: number | null;
            url?: string | null;
        }
    ];
}

export interface EmployeeForm{
    first_name: string;
    last_name: string;
    email: string;
    phone_number: string;
    date_of_birth: string;
    jmbg: string;
    gender: string;
    address: string;
    status: string;
    position: string;
    salary: number;
    contracts: Contract
}

export interface Contract {
    id: number;
    started_at: string;
    ended_at: string;
    contract_type_id: string;
    document: Document;
    contract_type: ContractType;
}

export interface ContractType {
    id: number;
    name: string;
}

export interface Document{
    id: number;
    file_path: string;
    file_name: string;
}

export interface Employee {
    id: number;
    first_name: string;
    last_name: string;
    email: string;
    status_id: number;
    position_id: number;
    date_of_birth: string;
    phone_number: string;
    address: string;
    JMBG: string;
    gender: string;
    started_at: string;
    created_at: string;
    updated_at: string;
    status: EmployeeStatus;
    salary: Salary;
    position: Position;
    contract: Contract[];
}

export interface EmployeeStatus {
    id: number;
    name: string;
}

export interface Salary{
    id: number;
    employee_id: number;
    current_amount: number;
    last_raise: string
}

export interface Position{
    id: number;
    name: string;
}

export interface Status{
    id: number;
    name: string;
}

export interface ReferenceData {
    statuses: Record<string, string>;
    positions: Record<string, string>;
    contractTypes: Record<string, string>;
}

export interface ReferenceDataWithExpirations extends ReferenceData {
    expireContract?: number[];
}

export interface User {
    id: number;
    name: string;
    email: string;
    password: any;
    roles: Role[];
}

export interface Role {
    id: number;
    name: string;
}

export interface Logs{
    method:string;
    path: string;
    status_code: string;
    ip_address: string;
}
