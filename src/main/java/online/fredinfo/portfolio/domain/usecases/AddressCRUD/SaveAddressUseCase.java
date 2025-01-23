package online.fredinfo.portfolio.domain.usecases.AddressCRUD;

import online.fredinfo.portfolio.domain.entities.Address;
import online.fredinfo.portfolio.domain.entities.AddressRepository;

public class SaveAddressUseCase {
    private final AddressRepository addressRepository;

    public SaveAddressUseCase(AddressRepository addressRepository) {
        this.addressRepository = addressRepository;
    }

    public AddressRepository getAddressRepository() {
        return addressRepository;
    }

    public Address execute(Address address) {
        if (address != null) {
            return addressRepository.save(address);
        }

        return null;
    }
}
