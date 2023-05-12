import HomeComponent from "../Home/HomeComponent"
import SettingsComponent from "../settings/SettingsComponent"
import { FontAwesome } from '@expo/vector-icons'
import { createBottomTabNavigator } from "@react-navigation/bottom-tabs"

const Tab = createBottomTabNavigator()

export default function TabsComponent() {
  return (
    <Tab.Navigator>
        <Tab.Screen name="Home" component={HomeComponent}  
            options={{ 
            tabBarLabel:'Home',
            tabBarIcon: ({size})=>(
                <FontAwesome name="home" color={"#C22"} size={size}/>
            ),
            headerShown:false
            }}/>
        <Tab.Screen name="Settings" component={SettingsComponent} 
            options={{ 
            tabBarLabel:'Settings',
            tabBarIcon: ({size})=>(
                <FontAwesome name="cog" color={"#C22"} size={size}/>
                
            ),
            headerShown:false

            }}/>
    </Tab.Navigator>
    
    

  )
}
