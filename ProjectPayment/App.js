import { StatusBar } from 'expo-status-bar';
import { StyleSheet, ImageBackground } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import HomePage from './src/components/HomePage';
import HistoryPage from './src/components/HistoryPage';
import LoanCalculator from './src/components/modules/LoanCalculator';
import MorgageEst from './src/components/modules/MorgageEst'; 
import StudentLoanEst from './src/components/modules/StudentLoanEst';

const Stack = createNativeStackNavigator();

export default function App() {
  
  return (
    <ImageBackground source={require('./assets/bg.png')} style={styles.container} resizeMode='cover'>
      <NavigationContainer>
        <Stack.Navigator initialRouteName='Home' screenOptions={{headerShown: false}}>
          <Stack.Screen name="Home" component={HomePage} />
          <Stack.Screen name="History" component={HistoryPage} />
          <Stack.Screen name="Loan" component={LoanCalculator} />
          <Stack.Screen name="Mortgage" component={MorgageEst} />
          <Stack.Screen name="StdLoan" component={StudentLoanEst} />
        </Stack.Navigator>
      </NavigationContainer>
    </ImageBackground>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
  },
});
