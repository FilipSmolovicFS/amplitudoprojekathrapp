import type {Position} from "@/types/employee/position.ts";
import type {Contract} from "@/types/contract/contract.ts";
import type {Salary} from "@/types/employee/salary.ts";
import type {EmployeeStatus} from "@/types/employee/employee-status.ts";

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
