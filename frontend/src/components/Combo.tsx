import 'rsuite/dist/rsuite.min.css';
import "../assets/combo.css";
import { SelectPicker } from "rsuite";

interface ComboProps<T> {
  title: string;
  data: T[];
  value?: string;
  isLoading: boolean;
  onChange: (value: string | null) => void;
}

export const Combo = <T extends object>({
  title,
  data,
  value,
  isLoading,
  onChange
}: ComboProps<T>) => {
  return (
    <div className="combo-box" style={{width: '50%'}}>
      <label>{title}</label>
      <SelectPicker
        size="lg"
        data={data}
        defaultValue={value}
        placeholder="Selecciona un autor"
        searchable
        style={{width: 380}}
        loading={isLoading}
        onChange={onChange}
      />
    </div>
  );
};
