package online.fredinfo.portfolio.domain.usecases.AddressCRUD;

import online.fredinfo.portfolio.domain.entities.Address;
import online.fredinfo.portfolio.domain.entities.AddressRepository;

import java.util.UUID;

public class DeleteAddressUseCase {
    private final AddressRepository addressRepository;

    public DeleteAddressUseCase(AddressRepository addressRepository) {
        this.addressRepository = addressRepository;
    }

    public void execute(UUID addressId) {
        this.addressRepository.deleteById(addressId);
    }

    public void execute(Address address) {
        this.addressRepository.delete(address);
    }
}
