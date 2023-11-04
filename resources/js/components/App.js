import React from "react"
import ReactDOM from "react-dom"
import RouteList from "@/components/Core/RouteList"

const App = () => {
	return (
		<React.Fragment>
			<RouteList GLOBAL_STATE={GLOBAL_STATE} />
		</React.Fragment>
	)
}

export default App

if (document.getElementById("app")) {
	ReactDOM.render(<App />, document.getElementById("app"))
}
