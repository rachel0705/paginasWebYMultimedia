const BasicLayout = ({children}) => {
    return (
        <div>
            <Navbar />
            {children}
            <HomePage />
        </div>
    )
}

export default BasicLayout