import type {Role} from "@/types/auth/role.ts";

export interface User {
    id: number;
    name: string;
    email: string;
    password: any;
    roles: Role[];
}
