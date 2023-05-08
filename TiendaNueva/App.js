import { NavigationContainer } from "@react-navigation/native";
import { createNativeStackNavigator } from "@react-navigation/native-stack";
import LoginComponent from "./views/auth/LoginComponent";
import HomeComponent from "./views/Home/HomeComponent";
export default function App() {
  const Stack = createNativeStackNavigator()
  return (
    <NavigationContainer>
      <Stack.Screen component={LoginComponent} name="Login"/>
      <Stack.Screen component={HomeComponent} name="Home"/>

    </NavigationContainer>
    
  );

}

