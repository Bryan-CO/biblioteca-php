import SearchIcon from '../assets/img/search-icon.png'
import '../assets/input.css'
interface InputProps{
    onChange?: React.ChangeEventHandler<HTMLInputElement>
    placeholder: string
}

export default function Input ({onChange, placeholder}: InputProps): JSX.Element {
    return(
        <div className='input-container'>
            <input placeholder={placeholder} className="search-input" onChange={onChange} type="text" />
            <img src={SearchIcon} alt="" />
        </div>
    )
}