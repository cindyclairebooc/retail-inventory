import { Navigate, Outlet } from "react-router-dom";
import { useStateContext } from "../contexts/EmployeeContextProvider";

export default function GuestLayout() {
    const {user, token} = useStateContext()
    if (token){
        return <Navigate to ="/" />        
    }

    return (
        <div id="guestLayout">
        <Outlet />
        </div>
    )
}
