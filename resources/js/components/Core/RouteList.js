import React from "react"
import { HashRouter, Switch, Route } from "react-router-dom"
import ScrollToTop from "@/components/Core/ScrollToTop"

const RouteList = ({ GLOBAL_STATE }) => {
	const routes = [
		{
			path: "/",
			component: <Index {...GLOBAL_STATE} />,
		},
	]

	return (
		<HashRouter>
			<ScrollToTop />

			{routes.map((route, key) => (
				<Route
					key={key}
					exact
					path={route.path}
					render={() => route.component}
				/>
			))}
		</HashRouter>
	)
}

export default RouteList
