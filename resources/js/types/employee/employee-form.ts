import type {Contract} from "@/types/contract/contract.ts";

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
